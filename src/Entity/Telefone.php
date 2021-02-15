<?php


namespace Alura\Doctrine\Entity;


/**
 * @Entity
 * @Table(name="telefones")
 */
class Telefone
{
    /**
     * @Id
     * @GeneratedValue
     * @Column(type="integer")
     */
    private int $id;
    /**
     * @Column(type="string", lenght="20")
     */
    private string $numero;
    /**
     * @ManyToOne(targetEntity="Aluno")
     */
    private Aluno $aluno;


    /**
     * @return string
     */
    public function getNumero(): string
    {
        return $this->numero;
    }

    /**
     * @param string $numero
     */
    public function setNumero(string $numero): void
    {
        $this->numero = $numero;
    }

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): self
    {
        $this->id = $id;
        return $this;
    }

    /**
     * @return Aluno
     */
    public function getAluno(): Aluno
    {
        return $this->aluno;
    }

    /**
     * @param Aluno $aluno
     */
    public function setAluno(Aluno $aluno): self
    {
        $this->aluno = $aluno;
        return $this;
    }
}