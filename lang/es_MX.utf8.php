<?php
class Lang {
    public function __construct() {
        $array = array();
        $this->array = &$array;
        $array["index.welcome.main"] = 'Bienvenido a la Lista de Sanciones de {server}.';

        $array["title.index"] = 'Inicio';
        $array["title.bans"] = 'Baneos';
        $array["title.mutes"] = 'Muteos';
        $array["title.warnings"] = 'Advertencias';
        $array["title.kicks"] = 'Kickeos';

        $array["page.permanent.ban"] = 'Baneo Permanente';
        $array["page.permanent.mute"] = 'Muteo Permanente';
        $array["page.permanent.warning"] = 'Permanente';
        $array["page.expired.ban"] = '(Desbaneado)';
        $array["page.expired.ban-by"] = '(Desbaneado por {name})';
        $array["page.expired.mute"] = '(Desmuteado)';
        $array["page.expired.mute-by"] = '(Desmuteado por {name})';
        $array["page.expired.warning"] = '(Expirado)';

        $array["check.username"] = "Jugador";
        $array["action.check"] = "Buscar";
        $array["table.pager.number"] = "Página";

        $array["error.name.unseen"] = "no existe.";

        $array["title.staff-history"] = "Sanciones Recientes por ";
        $array["title.player-history"] = "Sanciones Recientes para ";
        $array["history.type"] = "Sanción";

        $array["history.error.uuid.no-result"] = "Sanciones no Encontradas.";
        $array["action.return"] = "Volver a";

        $array["warnings.received"] = "¿Advertencia Recibida?";

        // Errors which are only accessible from invalid user input or removed pages.
        $array["error.name.invalid"] = "Nombre Inválido.";
        $array["history.error.uuid.required"] = "Argumentos Inválidos (uuid).";
        $array["info.error.type-id.required"] = "Argumentos Inválidos (tipo, id).";
        $array["info.error.type.invalid"] = "La página que deseas visitar no existe.";
        $array["info.error.id.invalid"] = "ID Inválida";
        $array["info.error.id.no-result"] = "Error: ";
        
        //Custom Added by GlareMasters's Material Design Addon
        $array["contact_button"] = "Contact Us";
        $array["ban_appeal"] = "Ban Appeal";
        $array["players_online"] = "Players Online:";
        $array["credits"] = "Credits";
        $array["github"] = "GitHub";
        $array["litebans"] = "LiteBans";
        $array["glare"] = "GlareMasters";
        $array["join"] = "Join";
        $array["others"] = "others on";
	    $array["version"] = "Version: ";
	    $array["version_latest"] = "Latest";
	    $array["click_for_latest_version"] = "Click Here To Get Latest Version";
    }
}