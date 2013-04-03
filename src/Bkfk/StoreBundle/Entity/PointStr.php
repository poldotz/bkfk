<?php

namespace Bkfk\StoreBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Doctrine\ORM\Query\AST\Functions\FunctionNode;
use Doctrine\ORM\Query\Lexer;


/**
 * PointStr
 *
 * @ORM\Table()
 * @ORM\Entity
 *
 * POINT_STR function for querying using Point objects as parameters
 *
 * Usage: POINT_STR(:param) where param should be mapped to $point where $point is Wantlet\ORM\Point
 *        without any special typing provided (eg. so that it gets converted to string)
 */
class PointStr extends FunctionNode {
    private $arg;

    public function getSql(\Doctrine\ORM\Query\SqlWalker $sqlWalker) {
        return 'GeomFromText(' . $this->arg->dispatch($sqlWalker) . ')';
    }

    public function parse(\Doctrine\ORM\Query\Parser $parser) {
        $parser->match(Lexer::T_IDENTIFIER);
        $parser->match(Lexer::T_OPEN_PARENTHESIS);
        $this->arg = $parser->ArithmeticPrimary();
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
