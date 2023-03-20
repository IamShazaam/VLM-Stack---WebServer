<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>
<p align="center"><a href="https://postman.com" target="_blank"><img src="http://teampereda.com/62cc1b3a150d5de9a3dad5f7.png" width="400" alt="Postman Logo"></a></p>
<p align="center"><a href="https://vuejs.org/" target="_blank"><img src="https://upload.wikimedia.org/wikipedia/commons/9/95/Vue.js_Logo_2.svg" width="400" alt="Postman Logo"></a></p>
<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

# VLM-Stack---WebServer

* Vue.js: View (user interface) + HTTP client (fetching data from the API) -->
* Laravel: Model (data handling) + Controller (business logic) + API routes
* MSSQL: database to perform CRUD (Create, Read, Update, and Delete) operations.

    To use the endPoints of this backend project you need to use POSTMAN
    
        * To create users: 
            - POST method http://localhost:8000/api/create-account
            - Body -> form-data -> key: username, value: myusername -> key: password -> value: mypassword
            - SEND
            * Remember the password are already sended as hash('sha256'), 
              this is a reminder to make sure to save your passsword.

        * To use the dummyData creator:
            - POST method http://localhost:8000/create-accounts and SEND
            * There is no need to add values here since its already written in dummyDataController.     
        
        * endPoints added:
            - GET method http://localhost:8000/api/check-email/mymail@gmail.com and SEND
            - GET method http://localhost:8000/api/check-username/testaccount and SEND
            
            
    Me_MuOnline:

        MEMB_INFO: Contains user account information.
        MEMB_STAT: Contains user account online status.
        AccountCharacter: Contains character list and account association.
        MEMB_CREDITS: Contains user account credits information.

    MuOnline:

        Character: Contains character information, such as name, level, and class.
        Guild: Contains information about guilds.
        GuildMember: Contains information about guild members, connecting a character to a guild.
        T_Crywolf_SYNC: Contains information about the Crywolf event.
        warehouse: Contains information about user account item storage.

    Ranking:

        Gens_Rank: Contains information about the Gens ranking.
        BC_STAT: Contains information about Blood Castle event ranking.
        CC_STAT: Contains information about Chaos Castle event ranking.
        DS_STAT: Contains information about Devil Square event ranking.
        IllusionTemple_STAT: Contains information about Illusion Temple event ranking.

    Events:

        Lottery: Contains information about lottery events and winners.
        Roulette: Contains information about roulette events and winners.

    BattleCore:

        Character: Contains character information for the BattleCore server.
        Guild: Contains information about guilds for the BattleCore server.
        GuildMember: Contains information about guild members for the BattleCore server, 
        connecting a character to a guild.
        To define relationships between the tables in Laravel, you will need to create 
        appropriate Eloquent models for each table and then define the relationships using 
        Eloquent's relationship methods like hasOne, hasMany, belongsTo, and belongsToMany.
