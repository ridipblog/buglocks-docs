
export const Router = {
    routes: [
        'buglocks', // If run on development server
        'introduction',
        'installation',
        '404'
    ],

    // *** navigate to Route ***
    async navigatePage() {
        let currentPath = window.location.pathname;
        const pathParts = currentPath.split('/').filter(Boolean);
        let lastRoute = pathParts.pop();
        currentPath = '/' + pathParts.join('/');

        if (!currentPath.endsWith(`/${this.routePage}`)) {
            const basePath = (lastRoute === 'buglocks')
                ? `${currentPath}/${lastRoute}`
                : `${currentPath}`;

            // const newPath = `${basePath}/${this.routePage}`;
            const newPath = `${basePath}/${this.routePage}`.replace(/\/+/g, '/');
            history.pushState(null, '', newPath);
        }
    },

    // *** Validate Route ***
    async isValidRoute(route=null) {
        console.log("Error check 1");
        console.log(this.routes);
        console.log("sasasa",this.routePage)
        console.log("checking 1",this.routes.includes(this.routePage));
        if(!this.routes.includes(this.routePage)){
            this.routePage='404';
            console.log("Error check 2");
        }
    }
};