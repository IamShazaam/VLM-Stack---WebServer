USE Me_MuOnline
ALTER TABLE [Me_MuOnline].dbo.MEMB_INFO
ADD ip_address VARCHAR(45);

ALTER TABLE [Me_MuOnline].dbo.MEMB_INFO
ADD country VARCHAR(255);

ALTER TABLE [Me_MuOnline].dbo.MEMB_INFO
ADD lastName VARCHAR(255);

ALTER TABLE [Me_MuOnline].dbo.MEMB_INFO
ADD firstName VARCHAR(255);

-- Add isloggedIn column to MEMB_INFO table
USE [Me_MuOnline]
GO
ALTER TABLE [dbo].[MEMB_INFO]
ADD [isloggedIn] BIT NOT NULL DEFAULT 0;
GO

-- Add remember_token column to MEMB_INFO table
USE [Me_MuOnline]
GO
ALTER TABLE [dbo].[MEMB_INFO]
ADD [remember_token] VARCHAR(255) NULL;
GO