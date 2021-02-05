<?php


namespace Alura\Doctrine\Entity;
/**
 * Class Aluno
 * @package Alura\Doctrine\Entity
 * @Entity
 * @Table(name="alunos")
*/
class Aluno
{
    /**
     * @var int
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;
    /**
     * @var string
     * @Column (type="string")
     */
    private string $nome;

    /**
     * @return string
     */
    public function getNome() :string
    {
        return $this->nome;
    }

    /**
     * @param string $nome
     */
    public function setNome(string $nome): self
    {
        $this->nome = $nome;
        return $this;
    }

    /**
     * @return int
     */
    public function getId() :int
    {
        return $this->id;
    }
}