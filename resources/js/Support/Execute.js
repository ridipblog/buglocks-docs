import Request from "./Request.js?t=${Date.now()}";

class Execute extends Request {
    constructor() {
        super();
    }

    // *** Render Page ***
    renderPage = async (currentState) => {
        let routePage=currentState.val();

        // *** Re=define handleResponse Method ***
        this.handleResponse = async (response) => {
            $('.page-content').html(response);
        }

        // *** Request By Get ***
        await this.handleGet(`resources/views/pages/${routePage}.php`, {}, true);
                
        $('.nav-btn').removeClass('active');
        currentState.addClass('active');
        
    }
}

export default Execute;