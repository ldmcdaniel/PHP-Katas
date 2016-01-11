<?php

class BowlingGame
{
    protected $rolls = [];

    public function roll($pins)
    {
        $this->rolls[] = $pins;
    }

    public function score()
    {
        $score = 0;
        $roll = 0;

        for ($frame = 1; $frame <= 10; $frame++)
        {
            if ($this->isStrike($roll)) // then that's a strike
            {
                $score += 10 + $this->strikeBonus($roll);
                $roll++;
            }

            elseif ($this->isSpare($roll))
            {
                $score += 10 + $this->rolls[$roll + 2];
                $roll += 2;
            }
            else
            {
                $score += $this->getDefaultFrameScore($roll);
                $roll += 2;
            }

        }

        return $score;
    }

    /**
     * @param $roll
     * @return bool
     */
    protected function isSpare($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1] == 10;
    }

    /**
     * @param $roll
     * @return mixed
     */
    protected function getDefaultFrameScore($roll)
    {
        return $this->rolls[$roll] + $this->rolls[$roll + 1];
    }

    /**
     * @param $roll
     * @return bool
     */
    protected function isStrike($roll)
    {
        return $this->rolls[$roll] == 10;
    }

    private function strikeBonus($roll)
    {
        
    }
}
