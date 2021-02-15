<?php


namespace Alura\Doctrine\Entity;
use Doctrine\Common\Collections\ArrayCollection;
use Doctrine\Common\Collections\Collection;

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
     * @OneToMany(targetEntity="Telefone", mappedBy="aluno")
     */
    private $telefones;

    public function __construct()
    {
        $this->telefones = new ArrayCollection();
    }

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

    public function addTelefone(Telefone $telefone)
    {
        $this->telefones->add($telefone);
        $telefone->setAluno($this);
        return $this;
    }

    public function getTelefones(): Collection
    {
        return $this->telefones;
    }
}