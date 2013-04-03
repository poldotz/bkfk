<?php

namespace Bkfk\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;


/**
 * Distance
 *
 * @ORM\Table()
 * @ORM\Entity
 */
class Distance extends FunctionNode {
    private $firstArg;
    private $secondArg;

    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker) {
        //Need to do this hacky linestring length thing because
        //despite what MySQL manual claims, DISTANCE isn't actually implemented...
        return 'GLength(LineString(' .
            $this->firstArg->dispatch($sqlWalker) .
            ', ' .
            $this->secondArg->dispatch($sqlWalker) .
            '))';
    }

    public function parse(\Doctrine\ORM\Query\Parser $parser) {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->firstArg = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_COMMA);
        $this->secondArg = $parser->ArithmeticPrimary();
        $parser->match(Lexer::T_CLOSE_PARENTHESIS);
    }

    /**
     * @var integer
     *
     * @ORM\Column(name="id", type="integer")
     * @ORM\Id
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    private $id;


    /**
     * Get id
     *
     * @return integer 
     */
    public function getId()
    {
        return $this->id;
    }
}
