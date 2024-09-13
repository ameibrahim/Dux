async function findAndFixMissingObjectiveFiles(){

    const filenameResponse = await AJAXCall({
        phpFilePath: "../include/course/getAllObjectivesFilenames.php",
        rejectMessage: "Getting Filenames Failed",
        type: "fetch",
        params: ""
    })

    console.log("filenameResponse: ", filenameResponse);

    let errors = [];

    for await( fileObject of filenameResponse ){

        let { filename } = fileObject ;
        let correctPath = "../objectives/" + filename;

        // objectivesObjectResponse = fetch(correctPath, {cache: "reload"});

        await fetch(correctPath, {cache: "reload"}).then((response) => {
            if (response.ok) {
                return response.json();
            }
            throw new Error('Something went wrong');
            })
            .then((responseJson) => {
            // Do something with the response
            })
            .catch((error) => {
                console.log(error)
                errors.push({
                    ...fileObject
                })
        });
    }
    
    await saveLearningObjectivesAsJSON(`ObjectiveErrors-${uniqueID(2)}`, errors);
}