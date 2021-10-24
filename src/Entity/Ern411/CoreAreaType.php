<?php

namespace DedexBundle\Entity\Ern411;

/**
 * Class representing CoreAreaType
 *
 * A Composite containing details of the core part of a Video.
 * XSD Type: CoreArea
 */
class CoreAreaType
{

    /**
     * The position of the top left corner of the core area measured in Pixels. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @var string $topLeftCorner
     */
    private $topLeftCorner = null;

    /**
     * The position of the bottom right corner of the core area measured in Pixels. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @var string $bottomRightCorner
     */
    private $bottomRightCorner = null;

    /**
     * Gets as topLeftCorner
     *
     * The position of the top left corner of the core area measured in Pixels. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @return string
     */
    public function getTopLeftCorner()
    {
        return $this->topLeftCorner;
    }

    /**
     * Sets a new topLeftCorner
     *
     * The position of the top left corner of the core area measured in Pixels. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @param string $topLeftCorner
     * @return self
     */
    public function setTopLeftCorner($topLeftCorner)
    {
        $this->topLeftCorner = $topLeftCorner;
        return $this;
    }

    /**
     * Gets as bottomRightCorner
     *
     * The position of the bottom right corner of the core area measured in Pixels. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @return string
     */
    public function getBottomRightCorner()
    {
        return $this->bottomRightCorner;
    }

    /**
     * Sets a new bottomRightCorner
     *
     * The position of the bottom right corner of the core area measured in Pixels. The position is given as two coordinate values separated by a comma, the top left pixel being 0,0.
     *
     * @param string $bottomRightCorner
     * @return self
     */
    public function setBottomRightCorner($bottomRightCorner)
    {
        $this->bottomRightCorner = $bottomRightCorner;
        return $this;
    }


}

