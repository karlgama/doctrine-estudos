<?php


namespace Alura\Doctrine\Entity;

use Doctrine\Common\Collections\ArrayCollection;

/**
 * @Entity
 * @Table(name="cursos")
 */
class Curso
{
    /**
     * @Id
     * @GeneratedValue
     * @Column (type="integer")
     */
    private int $id;

    /**
     * @Column(type="string")
     */
    private string $nome;

    /**
     * @ManyToMany(targetEntity="Aluno", inversedBy="cursos")
     */
    private $alunos;

    public function __construct()
    {
        $this->alunos = new ArrayCollection();
    }

    /**
     * @return int
    **/
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string
     */
    public function getNome(): string
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

    public function addAluno(Aluno $aluno): self
    {
        if($this->alunos->contains($aluno)){
            return $this;
        }
        $this->alunos->add($aluno);
        $aluno->addCurso($this);
        return $this;

    }

    /**
     *
     */
    public function getAlunos()
    {
        return $this->alunos;
    }
}