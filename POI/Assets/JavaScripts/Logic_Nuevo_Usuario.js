var nUsuario;

arel.sceneReady(function()
{
	//Just for Debuging purposes
	//arel.Debug.activate();
	//arel.Debug.deactivateArelLogStream();
	
	nUsuario = new NuevoUsuario();
});

function NuevoUsuario()
{
    this.init = function()
    {
        var that = this;
        try
        {
                //init GUI stuff
                $('#Nombre_Usuario').keypress(function(e) { return that.keyControl(e); });
        }
        catch(e)
        {
                arel.Debug.error(e);
        }
    };
    
    this.keyControl = function(oEvent) {
        var keycode;

        if (window.event) {
                keycode = window.event.keyCode;
        } else if (oEvent) {
                keycode = oEvent.which;
        } else {
                return true;
        }

        if (keycode == 13) 
        {
                //make sure the iPhone keyboard disappears on pressing go
                $('#Nombre_Usuario').blur();						


                return false;
        } else {
                return true;
        }
    };    
    
    this.init();
}