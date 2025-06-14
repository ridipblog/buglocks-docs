// import { Router } from `./Traits/Router.js?v=${Date.now()}`;
const {Router} =await import(`./Traits/Router.js?v=${Date.now()}`);

const module = await import(`./Request.js?v=${Date.now()}`);
const Request = module.default;

class Execute extends Request {
    constructor() {
        super();
        this.routePage = null;
        this.exeResponse = {
            fails: false,
            message: null
        };
    }

    // *** Render Page ***
    renderPage = async (currentState) => {
        this.routePage = currentState.val();
        let route = window?.buglocks?.route ?? null;
        if ((route !== null) && (route !== "buglocks")) {
            this.routePage = route;
        }
        
        // *** Re-define handleResponse Method ***
        this.handleResponse = async (response) => {
            $('.page-content').html(response);
        }

        try {
            // *** Request By Get ***
            await this._handleGet(`resources/views/pages/${this.routePage}.php`, {}, true)

            //*** Navigate Page ***
            // await this.navigatePage();

            $('.nav-btn').removeClass('active');
            $(`#${this.routePage}`).addClass('active');
            window.buglocks.route = null;
        } catch (error) {
            this.exeResponse.fails = true;
            this.exeResponse.message = "Problem in route";
        }

    }
}

// *** Mix in Route Method in Execute ***
Object.assign(Execute.prototype, Router);

export default Execute;