<?php
/*
------------------
Language:   English
Type:       Errors
------------------
*/

$langerrors = array(
//ERROR TYPES
"ERROR"          => "Erro",
"WARNING"        => "Aviso",
"SUCCESS"        => "Sucesso",
"INFO"           => "Informação",

//BASIC ERRORS
"ERROR_NOCOMP"               => "Você ainda não tem uma empresa. Crie uma empresa primeiro!",
"ERROR_NOCOMP2"              => "Você não tem uma empresa.",
"ERROR_NOMONEY"              => "Sua empresa não tem dinheiro suficiente na conta corrente.",
"ERROR_INVALID_NUMBER"       => "Numero Inválido",
"ERROR_INVALID_COMP2"        => "Espera... Por qual empresa você está procurando?",
"ERROR_INVALID_COMP"         => "Esta empresa não existe!",
"ERROR_INVALID_CITY"         => "Cidade Inválida!",
"ERROR_INVALID_COUNTRY"      => "País Inválido!",
"ERROR_INVALID_OBJECT"       => "Objeto Inválido!",
"ERROR_LEVEL_TOO_LOW"        => "Você não está no nível necessário!",
"ERROR_SELECTED"             => "Selecionado",
"ERROR_INVALID_MEMBER"       => "Este usuário não existe.",
"ERROR_INVALID_REQUEST"      => "Solicitação inválida",


//Premium
"ERROR_PURCHASE_COMPL"           => "Compra concluida!",
"ERROR_PAY_ID_INVALID"           => "ID de pagamento inválida.",
"ERROR_PAYMENT_COMPL"            => "Pagamento concluido!",
"ERROR_PAYMENT_EXP"              => "O pagamento expirou. Por favor, tente novamente.",
"ERROR_PAYMENT_CANCELLED"        => "Você cancelou o pagamento.",
"ERROR_PAYMENT_NOT_ACCEPTED"     => "Pagamento não autorizado.",
"ERROR_PREMIUM_BOUGHT"           => "Função premium já adquirida.",
"ERROR_NOT_ENOUGH_CREDITS"       => "Você não tem créditos suficientes. Compre créditos antes.",
"ERROR_PREMIUM_REQ"              => "Você precisa de uma conta premium para acessar.",

//Video Reward
"ERROR_REWARD_CLAIMED"           => "Recompensa recebida!",
"ERROR_DAY_LIMIT_REACHED"        => "Limite diário atingido.",

//User

    //General
    "ERROR_TUTORIAL_SKIPPED"     => "Você pulou o Tutorial.",

    //Messages
    "ERROR_MESSAGE_SENT"         => "Mensagem enviada.",
    "ERROR_BLACKLISTED"          => "Você foi banido por este usuário.",
    "ERROR_MSG_SUBJECT_SHORT"    => "Assunto não é longo o suficiente.",
    "ERROR_MSG_CONTENT_SHORT"    => "O conteúdo não é longo o suficiente!",
    "ERROR_INVALID_MESSAGE"      => "Mensagem não encontrada!",
    "ERROR_MSG_NO_SUBJECT"       => "Não possui assunto!",
    "ERROR_MSG_NO_RECEIVER"      => "Não possui destinatário!",
    "ERROR_MSG_NO_CONTENT"       => "Não possui conteúdo!",

    //Profile
    "ERROR_CURRENT_PASSWORD"     => "Você precisa colocar a senha antiga!",
    "ERROR_NEW_PASSWORD"         => "Você precisa colocar a senha nova!",
    "ERROR_PASSWORD_CHANGED"     => "Senha alterada com sucesso!",
    "ERROR_DATABASE_ERROR"       => "Erro na base de dados!",
    "ERROR_PASS_NOT_SAFE"        => "A nova senha não é segura o suficiente. A senha deve ter ao menos 6 caracteres e possuir uma letra maiúscula.",
    "ERROR_PASS_INCORRECT"       => "Senha atual incorreta!",
    "ERROR_TIMEZONE_CHANGED"     => "Fuso Horário Alterado.",
    "ERROR_INVALID_TIMEZONE"     => "Fuso horário inválido!",

//Company + Corporation

    //General
    "ERROR_NAME_EXISTS"          => "Este nome já existe!",
    "ERROR_NAME_SHORT"           => "Este nome é muito curto! Mínimo de 6 caracteres!",
    "ERROR_NAME_SHORT2"          => "Este nome é muito curto! Mínimo de 3 caracteres",
    "ERROR_NAME_LONG"            => "Este nome é muito longo! Máximo de 18 caracteres!",
    "ERROR_NAME_LONG2"           => "Este nome é muito longo! Máximo de 13 caracteres!",
    "ERROR_NO_WAREHOUSE"         => "Você não tem um Centro de Distribuição (CD)! Compre um primeiro!",


    //Freights
    "ERROR_SPECIFY_FREIGHT"      => "Por favor, informe a frete que deseja aceitar",
    "ERROR_INVALID_FREIGHT"      => "Este ID de frete não é valido.",
    "ERROR_INVALID_TR_LICENSE"   => "Você não tem licença para este tipo de frete.",
    "ERROR_WAREHOUSE_FULL"       => "Seu CD é muito pequeno! Melhore-o ou cancele outros fretes primeiro!",
    "ERROR_INV_OR_ACC_FREIGHT"   => "Este frete não é válido ou alguém já o aceitou.",
    "ERROR_FREIGHT_ACCEPTED"     => "Você aceitou este frete.",

//Company

    //General
    "ERROR_INVALID_INVOICE"          => "Fatura Inválida!",
    "ERROR_NAME_CHANGED"             => "O nome foi alterado.",
    "ERROR_HQ_PART_CONCERN"          => "Sua sede só pode ser alterada se sua empresa não faz parte de uma corporação",
    "ERROR_HQ_CHANGE_DAYS"           => "Sua sede só pode ser alterada a cada 7 dias.",
    "ERROR_HQ_CHANGED"               => "A sede da sua empresa foi alterada.",
    "ERROR_MONEY_TRANSFERED"         => "Transferência concluida!",
    "ERROR_LEVEL_BANK_ACC"           => "Você precisa de nível 7 ou superior para abrir uma poupança!",
    "ERROR_NOMONEY_SAVINGS"          => "Você não tem dinheiro suficiente na poupança!",
    "ERROR_NOBANKACC"                => "Você não tem uma poupança. Abra uma na loja.",
    "ERROR_COMPMADE"                 => "Sua empresa foi feita!",
    "ERROR_ALREADY_COMP"             => "Você já tem uma empresa!",
    "ERROR_COMP_NOPROP"              => "Esta empresa não tem prédios.",
    "ERROR_COMPSTILLINCONCERN"       => "Sua empresa ainda é parte de uma corporação. Saia da corporação primeiro!",
    "ERROR_ACTIVE_MARKETSALE"        => "Sua empresa tem caminhões ou reboques a venda no mercado. Cancele as vendas primeiro!",
    "ERROR_COMP_REMOVED"             => "Sua empresa foi extinta.",
    "ERROR_UPGRADE_TR_LICENSE"       => "Você precisa melhorar sua licença de transporte primeiro!",

    "ERROR_CANT_SPEEDUP_ACTION_TYPE" => "Você não pode acelerar este tipo de ação",

    //Garage & Warehouse
    "ERROR_NO_GARAGE"                => "Você não tem uma garagem! Compre uma na loja primeiro!",
    "ERROR_GARAGE_FULL"              => "Sua garagem é pequena de mais! Melhore-a primeiro!",

    "ERROR_WAREHOUSE_DOWNGRADED"     => "Você rebaixou seu Centro de Distribuição (CD).",
    "ERROR_GARAGE_DOWNGRADED"        => "Você rebaixou sua garagem.",
    "ERROR_WAREHOUSE_UPGRADED"       => "Você melhorou seu Centro de Distribuição (CD).",
    "ERROR_GARAGE_UPGRADED"          => "Você melhorou sua garagem.",
    "ERROR_DOWNGRADE_LEVEL1"         => "Não é possível rebaixar quando no Nível 1!",

    //Transport License
    "ERROR_GET_PREV_LICENSES"        => "Você precisa primeiro conseguir a licença anterior antes dessa!",
    "ERROR_TR_LICENSE_REQ_LEVEL"     => "Você precisa de um nível mais alto para conseguir esta licença",
    "ERROR_LICENSE_NOT_AVAILABLE"    => "Licença não disponível!",
    "ERROR_TR_LICENSE_UPGRADED"      => "Parabéns! Você conseguiu sua licença!",

    //Contracts
    "ERROR_CONTRACT_TECH_FEW"        => "Seu contrato oferece poucos técnicos. Faça outro contrato ou aguarde até que os técnicos estejam disponíveis.",
    "ERROR_CONTRACT_NO_TECH"         => "Você não tem um contrato de técnicos ativo. Selecione um no menu.",

    //Buy and Sell (Shop, etc.)
    "ERROR_OBJECT_BOUGHT"            => "Objeto comprado.",
    "ERROR_OBJECT_SOLD"              => "Objeto vendido.",
    "ERROR_MAX_OBJECTS_REACHED"      => "Máximo de objetos atingido!",
    "ERROR_SELL_DONT_HAVE"           => "Você está tentando vender algo que não tem...",
    "ERROR_TRUCK_BOUGHT"             => "Caminhão comprado!",
    "ERROR_TRAILER_BOUGHT"           => "Reboque comprado!",

    //Steal Fuel
    "ERROR_ST_FUEL_LEVEL_REQ"        => "Você vai precisar de um nível mais alto para roubar combustível!",
    "ERROR_ST_FUEL_OTHER_LEVEL_REQ"  => "A vítima deste roubo de combustível precisa de um nível mais alto.",
    "ERROR_ST_FUEL_TOO_MUCH"         => "Você não quer ser preso, não é? Roubar combustível só é permitido a cada uma hora!",
    "ERROR_ST_FUEL_FT_REQ"           => "Você vai precisar de um tanque de combustível. Compre um na loja!",
    "ERROR_ST_FUEL_PROTECTED_LOCK"   => "Poxa vida... O tanque de combustível está protegido com uma trava!",
    "ERROR_ST_FUEL_FAILED"           => "Não foi dessa vez... O dono da empresa viu você!",
    "ERROR_ST_FUEL_SUCCESS"          => "Você conseguiu roubar combustível dessa empresa!",
    "ERROR_ST_FUEL_FT_EMPTY"         => "Poxa vida... O tanque de combustível deste caminhão está vazio",
    "ERROR_FUEL_TANK_FULL"           => "Seu tanque de combustível está cheio.",

    //Truck & Trailer Market
    "ERROR_TRUCK_SALE_ENDED"         => "A venda desse caminhão foi cancelada!",
    "ERROR_TRAILER_SALE_ENDED"       => "A venda desse reboque foi cancelada!",
    "ERROR_CANT_BUY_OWN_TRUCKS"      => "Você não pode comprar seu próprio caminhão!",
    "ERROR_CANT_BUY_OWN_TRAILERS"    => "Você não pode comprar seu próprio reboque!",
    "ERROR_LEVEL_MARKET"             => "Você precisa de nível 5 para negociar!",
    "ERROR_LEVEL_MARKET_SELL"        => "Você precisa de nível 5 para negociar!",
    "ERROR_MARKET_INVALID_PRICE"     => "Preço inválido! Insira um preço entre:",
    "ERROR_TRUCK_MARKET_AVAILABLE"   => "Seu caminhão agora está a venda no mercado.",
    "ERROR_TRAILER_MARKET_AVAILABLE" => "Seu reboque agora está a venda no mercado.",

    //Fuelstation
    "ERROR_COUNTRY_NOT_RECEIVED"     => "O sistema não recebeu o país que você escolheu.",
    "ERROR_NO_TRUCKS_FOR_REFILL"     => "Sua empresa não tem caminhões neste país que precisem de abastecimento!",
    "ERROR_TRUCK_NO_REFILL_NEEDED"   => "Esse caminhão não precisa ser abastecido agora.",
    "ERROR_NO_CONCERN_FUELSTATION"   => "Não existem postos da corporação neste país.",
    "ERROR_NO_CONCERN_FUEL"          => "O posto da sua corporação não possui combustível no estoque.",
    "ERROR_BUY_FUELTANK"             => "Compre um tanque de combustível primeiro.",
    "ERROR_EMPTY_FUELTANK"           => "Seu tanque de combustível não tem combustível o suficiente. Tente roubar de outras empresas pra enchê-lo de novo!",
    "ERROR_TRUCK_NOT_REFUELING"      => "Esse caminhão não está reabastecendo no momento!",

    //Friends & Enemies
    "ERROR_FRIEND_DELETED"           => "Essa pessoa foi apagada da sua lista de amigos!",
    "ERROR_ENEMY_DELETED"            => "Essa pessoa foi apagada da sua lista de inimigos.",
    "ERROR_ALREADY_FRIEND_ENEMY"     => "Este membro já é seu amigo/inimigo",
    "ERROR_MAX_FRIENDS"              => "Máximo de amigos atingido! Apague alguns primeiro!",
    "ERROR_MAX_ENEMIES"              => "Máximo de inimigos atingido! Apague alguns primeiro!",
    "ERROR_FIEND_ADDED"              => "Essa pessoa foi adicionada a sua lista de amigos!",
    "ERROR_ENEMY_ADDED"              => "Essa pessoa foi adicionada a sua lista de inimigos",
    "ERROR_SELECT_FRIEND_ENEMY"      => "Selecione alguém primeiro!",

    //Freight
    "ERROR_CHOOSE_FREIGHT"           => "Você precisa selecionar um frete primeiro",
    "ERROR_PREM_AUTO_SELECT"         => "Uma conta premium é necessária para usar esta função.",
    "ERROR_FREIGHT_OTHER_COMP"       => "Esse frete não pertence a sua empresa.",
    "ERROR_EMPL_SELECTED"            => "Empregados selecionados!",
    "ERROR_TRAILER_SELECTED"         => "Reboque selecionado..",
    "ERROR_TRUCK_SELECTED"           => "Caminhão selecionado.",

    "ERROR_DETACH_ALL_FIRST"         => "Você tem que desconectar tudo do frete primeiro (exceto o reboque).",
    "ERROR_FREIGHT_CANCELED"         => "Frete cancelado.",
    "ERROR_FREIGHT_ALR_PROGRESS"     => "Esse frete já está em andamento e não pode mais ser cancelado.",

    "ERROR_FREIGHT_STATUS"           => "Esse frete não está no estado certo para esta ação.",
    "ERROR_UNPAID_INVOICES"          => "Sua empresa tem faturas não pagas. Pague-as primeiro!",

    "ERROR_FREIGHT_READY"            => "Seu frete está pronto agora!",
    "ERROR_SPEEDUP_MOMENT"           => "Você não pode acelerar o estado atual desse frete!",

    //Insurance
    "ERROR_INSURANCE_LEVEL_REQ"      => "Você precisa de um nível mais alto para esse seguro.",
    "ERROR_INSURANCE_MAX_CHANGES"    => "Você só pode mudar seu seguro algumas vezes por dia...",

    //Trailer
    "ERROR_SELECT_TRAILER"           => "Por favor, selecione um reboque primeiro!",
    "ERROR_INVALID_TRAILER"          => "Esse reboque não existe!",
    "ERROR_TRAILER_EMPTY"            => "Esse reboque continua vazio",
    "ERROR_TRAILER_OTHER_COMP"       => "Esse reboque não pertence a sua empresa!",
    "ERROR_TRAILER_DEP_CITY"         => "Esse reboque não está na cidade de origem!",
    "ERROR_TRAILER_DES_CITY"         => "Esse reboque não está na cidade certa para ser descarregado!",
    "ERROR_INCOR_TYPE_TRAILER"       => "Esse reboque não pode ser usado para esse frete (tipo de reboque incorreto)",
    "ERROR_TRAILER_CANT_SELECT"      => "Você não pode mudar o reboque nessa fase do frete",
    "ERROR_TRAILER_COND_LOW"         => "Esse reboque está em más condições ou é muito velho para uma viagem longa.",
    "ERROR_TRAILER_OTHER_FREIGHT"    => "Esse reboque está selecionado para outro frete!",
    "ERROR_TRAILER_OTHER_ACT"        => "Esse reboque está envolvido em outra ação.;",
    "ERROR_TRAILER_OTHER_ACT2"       => "O reboque escolhido está fazendo outra coisa...",
    "ERROR_TRAILER_OTHER_ACT_FR"     => "Esse reboque não está disponível no momento. Está em outro frete ou envolvido em alguma ação...",
    "ERROR_TRAILER_OLD"              => "Esse reboque é muito velho pra uma viagem como essa.",
    "ERROR_TRAILER_SWITCHED"         => "Reboque alterado!",
    "ERROR_TRAILER_STILL_LOADED"     => "Esse reboque está carregado! Precisa descarrega-lo primeiro!",
    "ERROR_TRAILER_READY"            => "Esse reboque está pronto, agora!",
    "ERROR_TRAILER_REPAIR_INPOSSIBLE"=> "Esse reboque não pode ser consertado.",

        //Transfer
        "ERROR_TRAILER_ALREADY_CITY" => "Esse reboque já está na cidade!",
        "ERROR_TRAILER_DRIVING_CITY" => "Esse reboque será transportado até lá!",

        //Selling
        "ERROR_TRAILER_REP_BEF_SELL" => "Conserte o reboque antes de vender!",
        "ERROR_TRAILER_SOLD"         => "Reboque vendido!",


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
