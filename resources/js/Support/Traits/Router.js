
export const Router = {

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
};