<?php

class Pd
{
    private PDO $pd;
    public function __construct(string $dbPath = '../bdbase.db')
    {
        try {
            $this->pd = new PDO('sqlite:' . $dbPath);
            $this->pd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $this->pd->setAttribute(PDO::ATTR_CURSOR, PDO::CURSOR_SCROLL);
            echo "la connexion Avec success \n";
        } catch (PDOException $e) {
            echo 'Erreur de connexion : ' . $e->getMessage();
            exit;
        }
    }
    private function createTable(): void
    {
        $query = "CREATE TABLE IF NOT EXISTS users (
                    id INTEGER PRIMARY KEY AUTOINCREMENT,
                    username TEXT NOT NULL,
                    email TEXT NOT NULL
                  )";
        $this->pd->exec($query);
    }

    public function getConnexion(): PDO
    {
        return $this->pd;
    }
    public function FetAll(string $query): array
    {
        $stm = $this->pd->query($query);
        return $stm->fetchAll(PDO::FETCH_ASSOC);
    }
    public function insert(string $query, array $params): bool
    {
        $ql = $this->pd->prepare($query);
        return $ql->execute($params);
    }
    public function dellette(string $query): bool
    {
        return $this->pd->exec($query);
    }
    public function upDate(string $query, array $params): bool
    {
        $ql = $this->pd->prepare($query);
        $ql->execute($params);
        return $ql->rowCount() > 0;
    }
}