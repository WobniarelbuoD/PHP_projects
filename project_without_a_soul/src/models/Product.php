<?php
use Doctrine\ORM\Mapping as ORM;
/**
 * @ORM\Entity
 * @ORM\Table(name="kebabs")
 */
class Product {
    /** 
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue
     */
    protected $id;


    /** 
     * @ORM\Column(type="string")
     */
    protected $name;


    /**
     * @ORM\Column(
     * name="tester",
     * type="string",
     * options={"default":"kebabine"},
     * )
     */
    protected $content = "kebabine";

    public function getId(){
        return $this->id;
    }
    public function getContent(){
        return $this->content;
    }
    public function getName(){
        return $this->name;
    }

    public function setName($name){
        $this->name = $name;
    }
    public function setContent($content){
        $this->content = $content;
    }
    public function setId($id){
        $this->id = $id;
    }
}
