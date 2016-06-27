What I have done?

1.  Created TeaProject DB diagram in MySQL Workbanch.
2.  Exported teaproject.skl from MySQL Workbanch to phpMyAdmin and 
    created teaproject DB.
3.  Generated models from tables in Gii.
4.  Used built-in migration which generated user table.
5.  Modified User model and user table with to additional columns-
    firstname, lastname.
6.  Changed permissions for common/models, backend/models,
    backend/controllers, frontend/views backend/models, 
    frontend/controllers, frontend/views folders. Gave rights for 
    www-data group to wright generated files (via Gii and CRUD) to these 
    folders. For example:
   
    sudo chown -R slava:www-data backend/views
    chmod -R 775 backend/views 
   
7.  Generated CRUD for BusinessDay model.
8.  Generated BusinessDaySearch. php and _search.php.
9.  Regenarated with CRUD BusinessDayController.php, 
    business-day/_search.php, backend/views/business-day/index.php,
    common/models/BusinessDaySearch.php.
10. Generated CRUD for CashTransaction model.
11. Generated CRUD for CashTransactionReason model.
12. Generated CRUD for Departament model.
13. Generated CRUD for GoodsGroup model.
14. Generated CRUD for Measures model.
15. Generated CRUD for PriceOfGoods model.
16. Generated CRUD for Provider model.
17. Generated CRUD for ReceivingGoods model.
18. Generated CRUD for SellingGoods model.
19. Generated CRUD for SortsOfGoods model.
20. Generated CRUD for User model.
21. Installed Admin LTE component for backend. 
    Copied yii2-adminlte-asset folder into backend/views.
    Set up backend/config/main.php.
22. Added additional rules into User model.
23. Regenerated backend/views/user/_form.php with CRUD.    