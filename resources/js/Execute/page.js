// import Execute from "../Support/execute.js?t=Date.now()";
const module=await import(`../Support/execute.js?v=${Date.now()}`);
const Execute=module.default;
$(document).ready(function () {
    
    const exe = new Execute();
    
    // *** used Nav Buttons for Render Pages ***
    $(document).on('click', '.nav-btn', async function () {
        try {
            await exe.renderPage($(this));
        } catch (err) {
            console.log(err);
        }
    });

    // $('.nav-btn').off('click').on('click',async function(){
    //     try {
    //         await exe.renderPage($(this));
    //     } catch (err) {
    //         console.log(err);
    //     }
    // });
          
    // *** Run default for Introduction ***
    $('.nav-btn').first().trigger('click');
});