class Request {
    constructor() {
        console.log("Request module");
    }
    
    // *** Request Post Method ***
    _handlePost = async (api, postData = {}, isHTML = false) => {
        let self = this;
        await $.ajax({
            type: "post",
            url: api,
            data: postData,
            dataType: isHTML ? 'html' : 'json',
            contentType: false,
            processData: false,
            sucess: function (response) {
                self.handleResponse(response);
            },
            error: function (error) {
                console.log(error);
            }
        });
    }

    // *** Request Get Method ***
    _handleGet = async (api, params = {}, isHTML = false) => {        
        let self = this;
        await $.ajax({
            type: "get",
            url: api,
            data: params,
            dataType: isHTML ? 'html' : 'json',
            success: function (response) {
                self.handleResponse(response);
            },
            error: function (xhr, status, error) {
                
            }
        });
    }

    // *** Handle Response Data ***
    handleResponse = async (response) => {
    }
}

export default Request;