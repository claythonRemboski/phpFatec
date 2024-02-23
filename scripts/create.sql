-- init.sql
-- Verifica se o banco de dados já existe antes de criar
DO $$ 
BEGIN 
  IF NOT EXISTS (SELECT FROM pg_database WHERE datname = 'db_aulafatec') THEN
    CREATE DATABASE db_aulafatec;
  END IF;
END $$;
