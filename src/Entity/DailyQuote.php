<?php
/**
 * Created by PhpStorm.
 * User: Stereo
 * Date: 18/06/2019
 * Time: 17:09
 */

declare(strict_types = 1);

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
 */
class DailyQuote
{
    /**
     * @ORM\Column(type="integer", options={"unsigned":true}, nullable=false)
     * @ORM\Id()
     * @ORM\GeneratedValue()
     *
     * @var integer
     */
    protected $id;

    /**
     * @ORM\Column(type="string", length=50, nullable=false)
     *
     * @var string|null
     */
    protected $author;

    /**
     * @ORM\Column(type="text", length=500, nullable=false)
     *
     * @var string|null
     */
    protected $text;

    /**
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * @return string|null
     */
    public function getAuthor(): ?string
    {
        return $this->author;
    }

    /**
     * @param int $id
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }

    /**
     * @param string|null $author
     */
    public function setAuthor(?string $author): void
    {
        $this->author = $author;
    }

    /**
     * @return string|null
     */
    public function getText(): ?string
    {
        return $this->text;
    }

    /**
     * @param string|null $text
     */
    public function setText(?string $text): void
    {
        $this->text = $text;
    }
}