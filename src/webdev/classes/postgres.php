<?php
class Postgres
{
    private $pdo;

    function __construct()
    {
        $dsn = 'pgsql:host=postgres;dbname=webdev;user=userbanco;password=senhabanco';

        try {
            // Cria uma nova conexão PDO e armazena na propriedade $pdo
            $this->pdo = new PDO($dsn);

            // Configura o modo de erro do PDO para lançar exceções
            $this->pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

        } catch (PDOException $e) {
            // Em caso de erro, exibe a mensagem de erro
            die("Erro na conexão: " . $e->getMessage());
        }
    }

    function query($query)
    {
        try {
            $stmt = $this->pdo->query($query);
            return $stmt->fetchAll(PDO::FETCH_ASSOC);
        } catch (PDOException $e) {
            // Em caso de erro, exibe a mensagem de erro
            die("Erro na execução da query: " . $e->getMessage());
        }
    }
}