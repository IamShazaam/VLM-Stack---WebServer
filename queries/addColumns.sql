USE Me_MuOnline
ALTER TABLE [Me_MuOnline].dbo.MEMB_INFO
ADD ip_address VARCHAR(45);

ALTER TABLE [Me_MuOnline].dbo.MEMB_INFO
ADD country VARCHAR(255);

ALTER TABLE [Me_MuOnline].dbo.MEMB_INFO
ADD lastName VARCHAR(255);

ALTER TABLE [Me_MuOnline].dbo.MEMB_INFO
ADD firstName VARCHAR(255);