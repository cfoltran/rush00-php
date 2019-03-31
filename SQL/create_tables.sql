#------------------------------------------------------------
#        Script MySQL.
#------------------------------------------------------------


#------------------------------------------------------------
# Table: USERS
#------------------------------------------------------------

CREATE TABLE USERS(
        id_user   Int  Auto_increment  NOT NULL ,
        firstname Varchar (50) NOT NULL ,
        lastname  Varchar (50) NOT NULL ,
        login     Varchar (50) NOT NULL ,
        passwd    Varchar (512) NOT NULL ,
        email     Varchar (50) NOT NULL ,
        wallet    Int NOT NULL
	,CONSTRAINT USERS_PK PRIMARY KEY (id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ADMIN
#------------------------------------------------------------

CREATE TABLE ADMIN(
        id_user     Int NOT NULL ,
        little_name Varchar (50) NOT NULL ,
        firstname   Varchar (50) NOT NULL ,
        lastname    Varchar (50) NOT NULL ,
        login       Varchar (50) NOT NULL ,
        passwd      Varchar (512) NOT NULL ,
        email       Varchar (50) NOT NULL ,
        wallet      Int NOT NULL
	,CONSTRAINT ADMIN_PK PRIMARY KEY (id_user)

	,CONSTRAINT ADMIN_USERS_FK FOREIGN KEY (id_user) REFERENCES USERS(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: CATEGORIES
#------------------------------------------------------------

CREATE TABLE CATEGORIES(
        id_cat   Int  Auto_increment  NOT NULL ,
        name_cat Varchar (50) NOT NULL
	,CONSTRAINT CATEGORIES_PK PRIMARY KEY (id_cat)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: PRODUCT
#------------------------------------------------------------

CREATE TABLE PRODUCT(
        id_prod     Int  Auto_increment  NOT NULL ,
        label       Varchar (50) NOT NULL ,
        pieces      Int NOT NULL ,
        price       Int NOT NULL ,
        description Varchar (50) NOT NULL ,
        photo       Varchar (50) NOT NULL ,
        id_cat      Int NOT NULL
	,CONSTRAINT PRODUCT_PK PRIMARY KEY (id_prod)

	,CONSTRAINT PRODUCT_CATEGORIES_FK FOREIGN KEY (id_cat) REFERENCES CATEGORIES(id_cat)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: TRANSACTION
#------------------------------------------------------------

CREATE TABLE TRANSACTION(
        id_trans     Int  Auto_increment  NOT NULL ,
        date_trans   Date NOT NULL ,
        amount_trans Float NOT NULL ,
        id_user      Int NOT NULL
	,CONSTRAINT TRANSACTION_PK PRIMARY KEY (id_trans)

	,CONSTRAINT TRANSACTION_USERS_FK FOREIGN KEY (id_user) REFERENCES USERS(id_user)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: ORDERS
#------------------------------------------------------------

CREATE TABLE ORDERS(
        id_user   Int NOT NULL ,
        id_prod   Int NOT NULL ,
        qty_order Int NOT NULL
	,CONSTRAINT ORDERS_PK PRIMARY KEY (id_user,id_prod)

	,CONSTRAINT ORDERS_USERS_FK FOREIGN KEY (id_user) REFERENCES USERS(id_user)
	,CONSTRAINT ORDERS_PRODUCT0_FK FOREIGN KEY (id_prod) REFERENCES PRODUCT(id_prod)
)ENGINE=InnoDB;


#------------------------------------------------------------
# Table: REASSORT
#------------------------------------------------------------

CREATE TABLE REASSORT(
        id_prod      Int NOT NULL ,
        id_user      Int NOT NULL ,
        id_reassort  Int NOT NULL ,
        qty_reassort Int NOT NULL
	,CONSTRAINT REASSORT_PK PRIMARY KEY (id_prod,id_user)

	,CONSTRAINT REASSORT_PRODUCT_FK FOREIGN KEY (id_prod) REFERENCES PRODUCT(id_prod)
	,CONSTRAINT REASSORT_ADMIN0_FK FOREIGN KEY (id_user) REFERENCES ADMIN(id_user)
)ENGINE=InnoDB;

