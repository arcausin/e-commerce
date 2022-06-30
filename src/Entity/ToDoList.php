<?php

namespace App\Entity;

use App\Repository\ToDoListRepository;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass=ToDoListRepository::class)
 */
class ToDoList
{
    /**
     * @ORM\Id
     * @ORM\GeneratedValue
     * @ORM\Column(type="integer")
     */
    private $id;

    /**
     * @ORM\Column(type="string", length=255)
     */
    private $toDo;

    public function getId(): ?int
    {
        return $this->id;
    }

    public function getToDo(): ?string
    {
        return $this->toDo;
    }

    public function setToDo(string $toDo): self
    {
        $this->toDo = $toDo;

        return $this;
    }
}
