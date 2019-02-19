<?php
/*
------------------
Language:   English
Type:       Errors
------------------
*/

$langerrors = array(
//ERROR TYPES
"ERROR"          => "Error",
"WARNING"        => "Warnung",
"SUCCESS"        => "Erfolg",
"INFO"           => "Info",

//BASIC ERRORS
"ERROR_NOCOMP"               => "Du hast keine Firma. Erstelle zuerst eine!",
"ERROR_NOCOMP2"              => "Du hast keine Firma.",
"ERROR_NOMONEY"              => "Deine Firma hat nicht genug Geld auf dem Bankkonto!",
"ERROR_INVALID_NUMBER"       => "Ungültige Nummer!",
"ERROR_INVALID_COMP2"        => "Warte.. welche Firma suchst du?",
"ERROR_INVALID_COMP"         => "Diese Firma exestiert nicht!",
"ERROR_INVALID_CITY"         => "Ungültige Stadt!",
"ERROR_INVALID_COUNTRY"      => "Ungültiges Land!",
"ERROR_INVALID_OBJECT"       => "Ungültiges Objekt!",
"ERROR_LEVEL_TOO_LOW"        => "Du hast nicht das benötigte Level!",
"ERROR_SELECTED"             => "Ausgewählt.",
"ERROR_INVALID_MEMBER"       => "Spieler exestiert nicht!",
"ERROR_INVALID_REQUEST"      => "Ungültige Anfrage!",


//Premium
"ERROR_PURCHASE_COMPL"           => "Kauf abgeschlossen.",
"ERROR_PAY_ID_INVALID"           => "Zahlungs ID ungültig.",
"ERROR_PAYMENT_COMPL"            => "Kauf abgeschlossen.",
"ERROR_PAYMENT_EXP"              => "Zahlung verfallen. Bitte versuche es erneut.",
"ERROR_PAYMENT_CANCELLED"        => "Die Zahlung wurde abgebrochen.",
"ERROR_PAYMENT_NOT_ACCEPTED"     => "Zahlung nicht akzeptiert.",
"ERROR_PREMIUM_BOUGHT"           => "Premium Funktion gekauft.",
"ERROR_NOT_ENOUGH_CREDITS"       => "DU hast nicht genug Premium-Münzen, kaufe dir zuerst welche!",
"ERROR_PREMIUM_REQ"              => "Dafür benötigst du einen Premium Account.",

//Video Reward
"ERROR_REWARD_CLAIMED"           => "Belohnung erhalten!",
"ERROR_DAY_LIMIT_REACHED"        => "Tägliches Limit erreicht!",

//User

    //General
    "ERROR_TUTORIAL_SKIPPED"     => "Du hast das Tutorial übersprungen.",

    //Messages
    "ERROR_MESSAGE_SENT"         => "Nachricht gesendet.",
    "ERROR_BLACKLISTED"          => "Du wurdest von diesem Spieler blockiert!",
    "ERROR_MSG_SUBJECT_SHORT"    => "Thema ist nicht lang genug!", //maybe not theme, somehting like headline
    "ERROR_MSG_CONTENT_SHORT"    => "Text ist nicht lang genug!",
    "ERROR_INVALID_MESSAGE"      => "Nachricht nicht gefunden!",
    "ERROR_MSG_NO_SUBJECT"       => "Kein Thema angegeben!",
    "ERROR_MSG_NO_RECEIVER"      => "Kein Empfänger angegeben!",
    "ERROR_MSG_NO_CONTENT"       => "Kein Text angegeben!",

    //Profile
    "ERROR_CURRENT_PASSWORD"     => "Bitte gebe dein momentaniges Passwort ein!",
    "ERROR_NEW_PASSWORD"         => "Du musst ein neues Passwort eingeben!",
    "ERROR_PASSWORD_CHANGED"     => "Passwort geändert!",
    "ERROR_DATABASE_ERROR"       => "Datenbank Error!",
    "ERROR_PASS_NOT_SAFE"        => "Neues Passwort ist nicht sicher genug! Passwort muss mindestens 6 Zeichen lang sein, mit einer Zahl und einem Großbuchstaben.",
    "ERROR_PASS_INCORRECT"       => "Momentaniges Passwort falsch!",
    "ERROR_TIMEZONE_CHANGED"     => "Zeitzone geändert.",
    "ERROR_INVALID_TIMEZONE"     => "Ungültige Zeitzone!",

//Company + Corporation

    //General
    "ERROR_NAME_EXISTS"          => "Name exestiert bereits!",
    "ERROR_NAME_SHORT"           => "Name ist zu kurz! Mindestens 6 Zeichen!",
    "ERROR_NAME_SHORT2"          => "Name ist zu kurz! Mindestens 3 Zeichen!",
    "ERROR_NAME_LONG"            => "Name ist zu lang! Maximal 13 Zeichen erlaubt!",
    "ERROR_NAME_LONG2"           => "Name ist zu lang! Maximal 13 Zeichen erlaubt!",
    "ERROR_NO_WAREHOUSE"         => "Du hast kein Lager! Kaufe eins im Shop!",


    //Freights
    "ERROR_SPECIFY_FREIGHT"      => "Bitte gebe an welche Fracht du annehmen möchtes!.",
    "ERROR_INVALID_FREIGHT"      => "Die Fracht Nummer ist ungültig.",
    "ERROR_INVALID_TR_LICENSE"   => "Du hast keine gültige Transportlizens für diesen Frachttyp.",
    "ERROR_WAREHOUSE_FULL"       => "Dein Lager ist zu klein. Rüste es auf oder breche andere Frachten ab!",
    "ERROR_INV_OR_ACC_FREIGHT"   => "Diese Fracht ist ungültig oder jemand anderes hat sie bereits angenommen.",
    "ERROR_FREIGHT_ACCEPTED"     => "Du hast diese Fracht angenommen!.",

//Company

    //General
    "ERROR_INVALID_INVOICE"          => "Ungültige Rechnung!",
    "ERROR_NAME_CHANGED"             => "Name geändert.",
    "ERROR_HQ_PART_CONCERN"          => "Hauptquatier kann nur gerändert werden wenn deine Firma nicht Teil einer Kooperation ist.",
    "ERROR_HQ_CHANGE_DAYS"           => "Hauptquatier kann nur alle 7 Tage geändert werden.",
    "ERROR_HQ_CHANGED"               => "Firmen Hauptquatier wurde gändert.",
    "ERROR_MONEY_TRANSFERED"         => "Geld erfolgreich überwiesen!",
    "ERROR_LEVEL_BANK_ACC"           => "Um ein Sparkonto zu eröffnen, musst du mindestens Level 7 sein!",
    "ERROR_NOMONEY_SAVINGS"          => "Du hast nicht genug Geld auf deinem Sparkonto!",
    "ERROR_NOBANKACC"                => "Du hast kein Sparkkonto! Fordere zuerst eins im Shop an!",
    "ERROR_COMPMADE"                 => "Die Firma wurde erstellt!",
    "ERROR_ALREADY_COMP"             => "Du hast bereits eine Firma!",
    "ERROR_COMP_NOPROP"              => "Die Firma hat keine Gebäude.",
    "ERROR_COMPSTILLINCONCERN"       => "Die Firma ist Teil einer Kooperation. Verlasse zuerst deine Kooperation!",
    "ERROR_ACTIVE_MARKETSALE"        => "Die Firma hat momentan LKWs oder Anhänger im Verkauf. Breche zuerst den Verkauf ab!",
    "ERROR_COMP_REMOVED"             => "Die Firma wurde gelöscht.",
    "ERROR_UPGRADE_TR_LICENSE"       => "Upgrade zuerst deine Transportlizenz!",

    "ERROR_CANT_SPEEDUP_ACTION_TYPE" => "Diese Aktion kann nicht beschleunigt werden.",

    //Garage & Warehouse
    "ERROR_NO_GARAGE"                => "Du besitzt keine Garage! Kaufe eine im Shop!",
    "ERROR_GARAGE_FULL"              => "Deine Garage ist zu klein. Vergrößere sie!",

    "ERROR_WAREHOUSE_DOWNGRADED"     => "Du hast dein Lager verkleinert.",
    "ERROR_GARAGE_DOWNGRADED"        => "Du hast deine Garage verkleinert.",
    "ERROR_WAREHOUSE_UPGRADED"       => "Du hast dein Lager vergrößert.",
    "ERROR_GARAGE_UPGRADED"          => "Du hast deine Garage vergrößert.",
    "ERROR_DOWNGRADE_LEVEL1"         => "Verkleinern bei Level 1 nicht möglich!",

    //Transport License
    "ERROR_GET_PREV_LICENSES"        => "Du musst zuerst die voherige Lizenz besitzen um diese zu bekommen!",
    "ERROR_TR_LICENSE_REQ_LEVEL"     => "Du benötigst einen höheren Level um diese Lizens zu bekommen!",
    "ERROR_LICENSE_NOT_AVAILABLE"    => "Lizens nicht verfügbar!",
    "ERROR_TR_LICENSE_UPGRADED"      => "Glückwunsch! Du hast deine Transportlizenz bekommen!",

    //Contracts
    "ERROR_CONTRACT_TECH_FEW"        => "Dein Techniker-Vertrag bietet dir zu wenig Techniker. Bitte wähle einen anderen Vertrag oder warte bis deine Techniker verfügbar sind.",
    "ERROR_CONTRACT_NO_TECH"         => "Du hast keinen aktiven Techniker-Vertrag. Wähle einen im Menu unter Verträge.",

    //Buy and Sell (Shop, etc.)
    "ERROR_OBJECT_BOUGHT"            => "Objekt gekauft.",
    "ERROR_OBJECT_SOLD"              => "Objekt verkauft.",
    "ERROR_MAX_OBJECTS_REACHED"      => "Maximal erlaubte Objekte erreicht!",
    "ERROR_SELL_DONT_HAVE"           => "Du versuchst etwas zu verkaufen was du nicht besitzt..",
    "ERROR_TRUCK_BOUGHT"             => "LKW gekauft!",
    "ERROR_TRAILER_BOUGHT"           => "Anhänger gekauft!",

    //Steal Fuel
    "ERROR_ST_FUEL_LEVEL_REQ"        => "Du benötigst einen höheren Level um Treibstoff zu klauen!",
    "ERROR_ST_FUEL_OTHER_LEVEL_REQ"  => "Die Person bei der du Treibstoff klauen willst, muss ein höheres Level sein.",
    "ERROR_ST_FUEL_TOO_MUCH"         => "Du willst doch nicht verhaftet werden, oder? Treibstoff kannst du nur einmal pro Stunde klauen!",
    "ERROR_ST_FUEL_FT_REQ"           => "Du benötigst einen Treibstofftank. Kaufe zuerst einen im Shop!",
    "ERROR_ST_FUEL_PROTECTED_LOCK"   => "Pech gehabt.. Der Treibstofftank ist mit einem Schloss gesichert!",
    "ERROR_ST_FUEL_FAILED"           => "Nicht dein glücklichster Moment.. Der Firmen-Chef hat dich gesehen!",
    "ERROR_ST_FUEL_SUCCESS"          => "Du hast erfolgreich Treibstoff von dieser Firma geklaut.",
    "ERROR_ST_FUEL_FT_EMPTY"         => "Pech gehabt.. Der Treibstofftank des LKWs ist leer.",
    "ERROR_FUEL_TANK_FULL"           => "Dein Treibstofftank ist voll.",

    //Truck & Trailer Market
    "ERROR_TRUCK_SALE_ENDED"         => "Der Verkauf dieses LKWs wurde abgebrochen!",
    "ERROR_TRAILER_SALE_ENDED"       => "Der Verkauf dieses Anhängers wurde abgebrochen!",
    "ERROR_CANT_BUY_OWN_TRUCKS"      => "Du kannst nicht deine eigenen LKWs kaufen!",
    "ERROR_CANT_BUY_OWN_TRAILERS"    => "Du kannst nicht deine eigenen Anhänger kaufen!",
    "ERROR_LEVEL_MARKET"             => "Du musst Level 5 sein um auf dem Markt zu handeln!",
    "ERROR_LEVEL_MARKET_SELL"        => "Du musst Level 5 sein um auf dem Markt zu handeln!",
    "ERROR_MARKET_INVALID_PRICE"     => "Ungültiger Preis. Nenne einen Preis zwischen:",
    "ERROR_TRUCK_MARKET_AVAILABLE"   => "Dein LKW wird nun auf dem Markt verkauft.",
    "ERROR_TRAILER_MARKET_AVAILABLE" => "Dein Anhänger wird nun auf dem Markt verkauft.",

    //Fuelstation
    "ERROR_COUNTRY_NOT_RECEIVED"     => "Das System hat nicht das gewählte Land erhalten.",
    "ERROR_NO_TRUCKS_FOR_REFILL"     => "Deine Firma besitzt keine LKWs die betankt werden müssen in diesem Land!",
    "ERROR_TRUCK_NO_REFILL_NEEDED"   => "Der LKW muss gerade nicht betankt werden.",
    "ERROR_NO_CONCERN_FUELSTATION"   => "Keine Kooperations-Tankstelle verfügbar in diesem Land.",
    "ERROR_NO_CONCERN_FUEL"          => "Deine Kooperations-Tankstelle hat nicht genügen Kraftstoff zur verfügung.",
    "ERROR_BUY_FUELTANK"             => "Bitte kaufe zuerst einen Kraftstofftank im Shop.",
    "ERROR_EMPTY_FUELTANK"           => "Dein Kraftstofftank hat nicht genügend Treibstoff zur verfügung. Versuche Treibstoff bei anderen Firmen zu klauen um ihn wieder aufzufüllen.",
    "ERROR_TRUCK_NOT_REFUELING"      => "Dieser LKW ist nicht am Tanken!",

    //Friends & Enemies
    "ERROR_FRIEND_DELETED"           => "Die Person wurde von deiner Freundesliste entfernt.",
    "ERROR_ENEMY_DELETED"            => "Die Person wurde von der Blockierliste entfernt.",
    "ERROR_ALREADY_FRIEND_ENEMY"     => "Dieser Spieler ist bereits dein Freund oder Feind!",
    "ERROR_MAX_FRIENDS"              => "Maximale Anzahl an Freunden erreicht. Lösche zuerst welche!",
    "ERROR_MAX_ENEMIES"              => "Maximale Anzahl an Feinden erreicht. Lösche zuerst welche!",
    "ERROR_FIEND_ADDED"              => "Die Person wurde zu deiner Freundesliste hinzugefügt.",
    "ERROR_ENEMY_ADDED"              => "Die Person wurde zu deiner Feindesliste hinzugefügt.",
    "ERROR_SELECT_FRIEND_ENEMY"      => "Bitte wähle zuerst jemanden aus!",

    //Freight
    "ERROR_CHOOSE_FREIGHT"           => "You have to select a freight first!",
    "ERROR_PREM_AUTO_SELECT"         => "Premium account required for this function!",
    "ERROR_FREIGHT_OTHER_COMP"       => "This freight does not belong to your company.",
    "ERROR_EMPL_SELECTED"            => "Employees selected.",
    "ERROR_TRAILER_SELECTED"         => "Trailer selected.",
    "ERROR_TRUCK_SELECTED"           => "Truck selected.",

    "ERROR_DETACH_ALL_FIRST"         => "You first have to detach everything from the freight (except the trailer).",
    "ERROR_FREIGHT_CANCELED"         => "Freight canceled.",
    "ERROR_FREIGHT_ALR_PROGRESS"     => "This freight is already in progress and cannot be canceled anymore!",

    "ERROR_FREIGHT_STATUS"           => "This freight does not have the right status to perform this action!",
    "ERROR_UNPAID_INVOICES"          => "Your company has unpaid invoices. Pay them first!",

    "ERROR_FREIGHT_READY"            => "Your freight is ready now!",
    "ERROR_SPEEDUP_MOMENT"           => "You cannot speed up the current stage of this freight!",

    //Insurance
    "ERROR_INSURANCE_LEVEL_REQ"      => "You will need a higher level to be able to change your insurance!",
    "ERROR_INSURANCE_MAX_CHANGES"    => "You can only change your insurance a few times a day!",

    //Trailer
    "ERROR_SELECT_TRAILER"           => "Please select a trailer first.",
    "ERROR_INVALID_TRAILER"          => "The trailer does not exist!",
    "ERROR_TRAILER_EMPTY"            => "The trailer is still empty!",
    "ERROR_TRAILER_OTHER_COMP"       => "This trailer does not belong to your company!",
    "ERROR_TRAILER_DEP_CITY"         => "The trailer is not in the departure city!",
    "ERROR_TRAILER_DES_CITY"         => "The trailer is not in the correct city to start unloading!",
    "ERROR_INCOR_TYPE_TRAILER"       => "This trailer type cannot be used with this freight!",
    "ERROR_TRAILER_CANT_SELECT"      => "You cannot select a trailer at this freight stage.",
    "ERROR_TRAILER_COND_LOW"         => "The condition of this trailer is not good enough or your trailer is too old for a long trip!",
    "ERROR_TRAILER_OTHER_FREIGHT"    => "The trailer is selected for another freight!",
    "ERROR_TRAILER_OTHER_ACT"        => "The trailer is currently doing something else!",
    "ERROR_TRAILER_OTHER_ACT2"       => "The attached trailer is performing another action!",
    "ERROR_TRAILER_OTHER_ACT_FR"     => "The trailer is not in your garage at the moment. It is attached to a freight or doing another action.",
    "ERROR_TRAILER_OLD"              => "The trailer is too old for a long ride like this one!",
    "ERROR_TRAILER_SWITCHED"         => "Switched to another trailer.",
    "ERROR_TRAILER_STILL_LOADED"     => "The trailer is currently loaded. You have to unload your trailer first!",
    "ERROR_TRAILER_READY"            => "Your trailer is ready now!",
    "ERROR_TRAILER_REPAIR_INPOSSIBLE"=> "It is not possible to repair this trailer.",

        //Transfer
        "ERROR_TRAILER_ALREADY_CITY" => "The trailer already is in this city!",
        "ERROR_TRAILER_DRIVING_CITY" => "The trailer will be transported.",

        //Selling
        "ERROR_TRAILER_REP_BEF_SELL" => "Repair your trailer before selling it!",
        "ERROR_TRAILER_SOLD"         => "Trailer sold!",


    //Truck
    "ERROR_SELECT_TRUCK"             => "Please select a truck first.",
    "ERROR_INVALID_TRUCK"            => "The truck does not exist!",
    "ERROR_TRUCK_OTHER_COMP"         => "This truck does not belong to your company!",
    "ERROR_TRUCK_DEP_CITY"           => "The truck is not in the departure city!",
    "ERROR_TRUCK_FEW_HP"             => "The truck does not have enough horsepower for the trailer!",
    "ERROR_TRUCK_OTHER_ACT"          => "The truck is currently doing something else!",
    "ERROR_TRUCK_COND_LOW"           => "The condition of this truck is not good enough or your truck is too old for a long trip!!",
    "ERROR_TRUCK_LOW_FUEL"           => "The truck does not have enough fuel for this trip!",
    "ERROR_TRUCK_OLD"                => "The truck is too old for a long ride like this one!",
    "ERROR_TRUCK_OTHER_FREIGHT"      => "The truck is selected for another freight!",
    "ERROR_TRUCK_SWITCHED"           => "Switched to another truck.",
    "ERROR_TRUCK_OTHER_ACT2"         => "The attached truck is performing another action!",
    "ERROR_TRUCK_OTHER_ACT_FR"       => "The truck is not in your garage at the moment. It is attached to a freight or doing another action.",
    "ERROR_TRUCK_FREIGHT_STAGE"      => "You cannot select a truck at this freight stage.",
    "ERROR_TRUCK_READY"              => "Your truck is ready now!",
    "ERROR_TRUCK_REPAIR_INPOSSIBLE"  => "It is not possible to repair this truck.",
    "ERROR_TRUCK_HQ_REQ"             => "The truck has to be at your headquarter location to perform this action.",

        //Transfer
        "ERROR_TRUCK_ALREADY_CITY"   => "The truck already is in this city!",
        "ERROR_TRUCK_DRIVING_CITY"   => "The truck will be transported.",

        //Selling
        "ERROR_TRUCK_REP_BEF_SELL"   => "Repair your truck before selling it!",
        "ERROR_TRUCK_SOLD"           => "Truck sold!",

        //Fuel Tank Lock
        "ERROR_NO_FT_LOCK_AVAILABLE" => "You do not have a Fuel Tank Lock available. Buy one in the shop first!",
        "ERROR_TRUCK_ALREADY_FT_LOCK"=> "Your truck already has a Fuel Tank Lock.",
        "ERROR_TRUCK_NO_FT_LOCK"     => "Your truck does not have a Fuel Tank Lock.",

        //Navigation Unit
        "ERROR_NO_NAV_AVAILABLE"     => "You do not have a navigation unit available. Buy one in the shop first!",
        "ERROR_TRUCK_ALREADY_NAV"    => "Your truck already has a navigation unit.",
        "ERROR_TRUCK_NO_NAV"         => "Your truck does not have a navigation unit.",

    //Trucker
    "ERROR_SELECT_TRUCKER"           => "Please select a trucker first.",
    "ERROR_INVALID_TRUCKER"          => "The trucker does not exist!",
    "ERROR_TRUCKER_OTHER_COMP"       => "This trucker doesn't work for your company!",
    "ERROR_TRUCKER_DEP_CITY"         => "The trucker is not in the departure city!",
    "ERROR_TRUCKER_LICENSE_LOW"      => "The trucker does not have a valid license for this freight type!",
    "ERROR_TRUCKER_SICK"             => "The trucker is currently sick!",
    "ERROR_TRUCKER_NEEDS_SLEEP"      => "The trucker is falling asleep. Do something about it first!",
    "ERROR_TRUCKER_OTHER_ACT"        => "The trucker is currently doing something else!",
    "ERROR_TRUCKER_FREIGHT_STAGE"    => "You cannot select a trucker at this freight stage.",
    "ERROR_TRUCKER_OTHER_FREIGHT"    => "The trucker is selected for another freight!",
    "ERROR_TRUCKER_SWITCHED"         => "Switched to another trucker.",
    "ERROR_TRUCKER_OTHER_ACT2"       => "The attached trucker is performing another action!",

    //Warehouse Employee
    "ERROR_SELECT_WHEMPL"            => "Please select a Warehouse Employee first.",
    "ERROR_INVALID_WHEMPL"           => "The Warehouse Employee does not exist!",
    "ERROR_WHEMPL_OTHER_COMP"        => "This Warehouse Employee doesn't work for your company!",
    "ERROR_WHEMPL_CITY"              => "The Warehouse Employee is not in the correct city!",
    "ERROR_WHEMPL_DEP_CITY"          => "The Warehouse Employee is not in the departure city!",
    "ERROR_WHEMPL_SICK"              => "The Warehouse Employee is currently sick!",
    "ERROR_WHEMPL_OTHER_ACT"         => "The Warehouse Employee is currently doing something else!",
    "ERROR_WHEMPL_NEEDS_SLEEP"       => "The Warehouse Employee is falling asleep. Do something about it first!",
    "ERROR_WHEMPL_FREIGHT_STAGE"     => "You cannot select a Warehouse Employee at this freight stage.",
    "ERROR_WHEMPL_OTHER_FREIGHT"     => "The Warehouse Employee is selected for another freight!",
    "ERROR_WHEMPL_SWITCHED"          => "Switched to another Warehouse Employee.",
    "ERROR_WHEMPL_OTHER_ACT2"        => "The attached Warehouse Employee is performing another action!",

    //Manager
    "ERROR_SELECT_MGR"               => "Please select a Manager first.",
    "ERROR_SELECT_MGR_NEW"           => "Please select a Manager first. This is a new function in level 2!",
    "ERROR_SELECT_MGR_LEVEL"         => "You have to reach level 2 to select a manager!",
    "ERROR_MGR_OTHER_COMP"           => "This Manager doesn't work for your company!",
    "ERROR_MGR_OTHER_ACT"            => "The Manager is currently doing something else!",
    "ERROR_MGR_NEEDS_SLEEP"          => "The Manager is falling asleep. Do something about it first!",
    "ERROR_MGR_CANT_SELECT"          => "You cannot select a Manager at this freight stage.",
    "ERROR_INVALID_MGR"              => "This Manager does not exist!",
    "ERROR_MGR_OTHER_FREIGHT"        => "The manager is selected for another freight!",
    "ERROR_MGR_OTHER_ACT2"           => "The attached manager is performing another action!",
    "ERROR_MGR_SWITCHED"             => "Switched to another manager.",

    //Finances
    "ERROR_WAREHOUSE_FULL2"              => "Your warehouse is too small. Upgrade it first!",
    "ERROR_ACCOUNTANT_REQ"               => "You will need an accountant (available at level 3) to view the finances of your company!",
    "ERROR_PREM_FINANCE_DAYS"            => "You will need a premium account to see the finances of the last 14 days.",
    "ERROR_NO_DATA"                      => "No data available for the selected period.",

    //Contracts
    "ERROR_SPECIFY_CONTRACT"             => "Please specify the contract you want to accept.",
    "ERROR_INVALID_CONTRACT"             => "This contract is not valid.",
    "ERROR_CONTRACT_ACCEPTED"            => "Contract accepted.",

    //Employees
    "ERROR_SELECT_EMPLOYEE"              => "You have to select an employee!",
    "ERROR_INVALID_EMPLOYEE"             => "This employee does not exist!",
    "ERROR_INVALID_EMPLOYEE2"            => "Invalid employee!",
    "ERROR_EMPLOYEE_OTHER_COMP"          => "This employee doesn't work for your company!",
    "ERROR_EMPLOYEE_OTHER_ACTION"        => "This employee is doing something else!",
    "ERROR_EMPLOYEE_OTHER_FREIGHT"       => "This employee is attached to a freight!",
    "ERROR_FIRE_PREMIUM"                 => "It is not possible to fire a premium employee!",
    "ERROR_EMPLOYEE_FIRED"               => "You have now fired this employee.",
    "ERROR_EMPLOYEE_READY"               => "Your employee is ready now!",
    "ERROR_SPEEDUP_EMPL_RESTRIC"         => "You can't speed up this action!",
    "ERROR_EMPLOYEE_SICK"                => "This employee is currently sick!",
    "ERROR_EMPLOYEE_NO_SLEEP"            => "This employee does not need to sleep at the moment!",
    "ERROR_EMPLOYEE_SLEEP_STARTED"       => "This employee is now asleep.",
    "ERROR_EMPLOYEE_NEEDS_SLEEP"         => "This employee needs to sleep first!",
    "ERROR_EMPLOYEE_ALREADY_CITY"        => "The employee already is in this city!",
    "ERROR_EMPLOYEE_DRIVING_TRANSFER"    => "The employee is now driving to the city you have requested!",
    "ERROR_SPECIFY_START_CITY_EMPL"      => "Please specify a starting city for your employee.",
    "ERROR_SPECIFY_EMPLOYEE_HIRE"        => "Please specify the employee you want to hire.",

    "ERROR_MAX_TRUCKERS_REACHED"         => "You have exceeded the maximum number of Truckers of this type. Choose another one.",
    "ERROR_MAX_WHEMPL_REACHED"           => "You have exceeded the maximum number of Warehouse Employees of this type. Choose another one.",
    "ERROR_MAX_ACCOUNTANTS_REACHED"      => "You have exceeded the maximum number of Accountants.",
    "ERROR_MAX_HRMGRS_REACHED"           => "You have exceeded the maximum number of HR Managers.",
    "ERROR_MAX_TECHMGRS_REACHED"         => "You have exceeded the maximum number of Technical Managers.",
    "ERROR_MAX_MANAGERS_REACHED"         => "You have exceeded the maximum number of Managers of this type. Choose another one.",

    "ERROR_HIRE_MGR_LEVEL"               => "Hiring a Manager is only available when you have reached level 2.",
    "ERROR_HIRE_TECHMGR_LEVEL"           => "Hiring an Technical Manager is only available when you have reached level 19.",
    "ERROR_HIRE_HRMGR_LEVEL"             => "Hiring an HR Manager is only available when you have reached level 18.",
    "ERROR_HIRE_ACCOUNTANT_LEVEL"        => "Hiring an Accountant is only available when you have reached level 3.",

    "ERROR_HIRE_TRUCKER_SUCCESS"         => "You have hired this Trucker.",
    "ERROR_HIRE_WHEMPL_SUCCESS"          => "You have hired this WH Employee.",
    "ERROR_HIRE_MGR_SUCCESS"             => "You have hired this Manager.",
    "ERROR_HIRE_TECHMGR_SUCCESS"         => "You have hired this Technical Manager.",
    "ERROR_HIRE_HRMGR_SUCCESS"           => "You have hired this HR Manager.",
    "ERROR_HIRE_ACCOUNTANT_SUCCESS"      => "You have hired this Accountant.",

    "ERROR_UPGRADE_TRUCKERS_ONLY"        => "The upgrade option is only available for truckers!",
    "ERROR_ACHIEVE_PREV_LICENSE"         => "You first have to achieve the previous licenses to get this one!",
    "ERROR_INVALID_LICENSE"              => "Unavailable license!",
    "ERROR_LICENSE_UPGRADED"             => "License upgraded!",


//Corporation

    //General
    "ERROR_CONC_ALREADY_JOINED"      => "Your company already joined a corporation.",
    "ERROR_INVALID_CONCERN"          => "Corporation does not exist!",
    "ERROR_NOCONCERN"                => "Your company is not part of a corporation.",
    "ERROR_CONC_SELECT_MEMBER"       => "You have to select a member!",
    "ERROR_CONC_INVALID_MEMBER"      => "Invalid member!",
    "ERROR_MEMBER_NOT_IN_CONC"       => "This person is not part of your corporation!",
    "ERROR_CONC_NOT_OWNER"           => "You are not the owner of this corporation.",
    "ERROR_INSUF_RIGHTS"             => "Insufficient rights!",

    //Application
    "ERROR_CONC_ALREADY_APPLIED"     => "You already applied to this corporation! Be patient bro :)",
    "ERROR_CONC_MAX_REACHED"         => "Max amount of members for this corporation has already been reached.",
    "ERROR_CONC_MAX_REACHED2"        => "Max amount of members in this country has already been reached. Upgrade your office first!",
    "ERROR_NOT_ACCEPTING"            => "This corporation is not accepting new members at the moment.",
    "ERROR_LEVEL_CONCERN"            => "You have to be at level 6 to join a corporation.",
    "ERROR_CONC_APPLIED"             => "You have applied to this corporation. You will have to wait for the corporation owner to accept you.",
    "ERROR_CONC_INVALID_APPL"        => "Application for this corporation is not found.",
    "ERROR_CONC_APPL_CANCELED"       => "You have canceled your application to this corporation.",

    //Promote, Fire, Retire & Delete
    "ERROR_CONC_ACTIVE_MEMBERS"      => "This corporation still has other members. Fire them first!",
    "ERROR_CONC_ACTIVE_FREIGHTS"     => "This corporation still has active freights. Cancel or complete them first!",
    "ERROR_CONC_DELETED"             => "You have deleted this corporation.",
    "ERROR_CONC_FIRED_MEMBER"        => "You have now fired this member.",
    "ERROR_CONC_PROMOTED_MEMBER"     => "You have now promoted this member.",
    "ERROR_NO_CONC_PREMIUM_PROM"     => "This member does not have the requirements to start a corporation.",
    "ERROR_OWNER_CANT_RETIRE"        => "You are the owner of this corporation. It is not possible for you to leave. You're able to delete your corporation instead.",
    "ERROR_CONC_OPEN_INVOICES2"      => "You still have open invoices with this corporation. Pay them first!",
    "ERROR_CONC_ACTIVE_FREIGHTS2"    => "You still have active corporation freights. Cancel or complete them first!",
    "ERROR_CONC_RETIRED"             => "You have left this corporation.",

    //Create
    "ERROR_CONC_REQUIREMENTS"        => "You don't have the requirements to start a corporation!",
    "ERROR_CONC_CREATED"             => "The corporation has been made!",
    "ERROR_INVALID_NAME"             => "Invalid name!",

    //Properties
    "ERROR_INVALID_FUELST"           => "Invalid Fuel Station!",
    "ERROR_FUELST_EXISTS"            => "You already have a Fuel Station in this country!",
    "ERROR_CONC_MONEY"               => "Your corporation does not have enough money!",
    "ERROR_FUELST_BOUGHT"            => "Fuel Station bought.",
    "ERROR_FUELST_REFUELED"          => "Fuel Station refueled.",
    "ERROR_FLPRICE_HIGH"             => "Price is too high!",
    "ERROR_FLPRICE_SET"              => "Fuel Price Set.",
    "ERROR_CONC_LEVEL"               => "Your corporation does not have the required level!",
    "ERROR_FUELST_UPGRADED"          => "Fuel Station upgraded.",
    "ERROR_INVALID_OFFICE"           => "Invalid office!",
    "ERROR_OFFICE_EXISTS"            => "You already have an office in this country!",
    "ERROR_OFFICE_BOUGHT"            => "Office bought.",
    "ERROR_OFFICE_UPGRADED"          => "Office upgraded.",
    "ERROR_CONC_NO_PROPERTIES"       => "Corporation does not have any buildings.",

    //Project
    "ERROR_INVALID_PROJECT"          => "Project not found!",
    "ERROR_PROJECT_NOT_AVAIL"        => "Project is not available anymore!",
    "ERROR_PROJECT_MAX_REACHED"      => "Your corporation already has two open projects!",
    "ERROR_PROJECT_ACCEPTED"         => "Project accepted.",
    "ERROR_INCOMPLETE_PROJ_ACT"      => "Complete all project activities first!",
    "ERROR_PROJECT_CANCELED"         => "Project canceled.",
    "ERROR_PROJECT_FINISHED"         => "Project finished!",

    //Other
    "ERROR_CONC_DONATED"             => "Money successfully donated.",
    "ERROR_CONC_DONATION_SET"        => "Daily donation set!",
    "ERROR_GENERAL_MESSAGE_SAVED"    => "The message has been saved.",

    "ERROR_INVALID_LANGUAGE"         => "Invalid language.",
    "ERROR_LANGUAGE_CHANGED"         => "Language changed.",
    "ERROR_RIGHTS_CHANGED"           => "Rights changed."
);
?>
