import Request from "./Request.js?t=Date.now()";

class Execute extends Request {
    constructor() {
        super();
    }

    // *** Render Page ***
    renderPage = async (currentState) => {
        let routePage = currentState.val();
        let route=window?.buglocks?.route ?? null;
        if ((route !== null) &&(route!=="buglocks")) {
            routePage = route;
        }

        // *** Re=define handleResponse Method ***
        this.handleResponse = async (response) => {
            $('.page-content').html(response);
        }

        // *** Request By Get ***
        await this._handleGet(`resources/views/pages/${routePage}.php`, {}, true);

        let currentPath = window.location.pathname;
        console.log(currentPath);
        const pathParts = currentPath.split('/').filter(Boolean);
        let lastRoute = pathParts.pop();
        currentPath = '/' + pathParts.join('/');

        if (!currentPath.endsWith(`/${routePage}`)) {
            const basePath = (lastRoute === 'buglocks')
                ? `${currentPath}/${lastRoute}`
                : `${currentPath}`;

            const newPath = `${basePath}/${routePage}`;
            // const newPath = `${basePath}/${routePage}`.replace(/\/+/g, '/');
            history.pushState(null, '', newPath);
        }

        $('.nav-btn').removeClass('active');
        $(`#${routePage}`).addClass('active');
        window.buglocks.route = null;

    }
}

export default Execute;