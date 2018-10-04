<?php
/**
 * Created by PhpStorm.
 * User: Angelos Roussakis (aggelos.roussakis@gmail.com)
 * Date: 05/04/18
 * Time: 14:39
 */

namespace BehatHTMLFormatter\Classes;

use Behat\Behat\Tester\Result\StepResult;

class Step
{
    private $keyword;
    private $text;
    private $arguments;
    private $line;
    private $result;
    private $resultCode;
    private $exception;
    private $output;
    private $definition;
    private $argumentType;
    private $screenshotSupport = false;
    private $screenshot;

    /**
     * @return mixed
     */
    public function getKeyword()
    {
        return $this->keyword;
    }

    /**
     * @param mixed $keyword
     */
    public function setKeyword($keyword)
    {
        $this->keyword = $keyword;
    }

    /**
     * @return mixed
     */
    public function getText()
    {
        return $this->text;
    }

    /**
     * @param mixed $text
     */
    public function setText($text)
    {
        $this->text = $text;
    }

    /**
     * @return mixed
     */
    public function getArgumentType()
    {
        return $this->argumentType;
    }

    /**
     * @param mixed $arguments
     */
    public function setArgumentType($argumentType)
    {
        $this->argumentType = $argumentType;
    }

    /**
     * @return mixed
     */
    public function getArguments()
    {
        return $this->arguments;
    }

    /**
     * @param mixed $arguments
     */
    public function setArguments($arguments)
    {
        $this->arguments = $arguments;
    }

    /**
     * @return mixed
     */
    public function getLine()
    {
        return $this->line;
    }

    /**
     * @param mixed $line
     */
    public function setLine($line)
    {
        $this->line = $line;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getException()
    {
        return $this->exception;
    }

    /**
     * @param mixed $exception
     */
    public function setException($exception)
    {
        $this->exception = $exception;
    }

    /**
     * @return mixed
     */
    public function getDefinition()
    {
        return $this->definition;
    }

    /**
     * @param mixed $definition
     */
    public function setDefinition($definition)
    {
        $this->definition = $definition;
    }

    /**
     * @return mixed
     */
    public function getOutput()
    {
        return $this->output;
    }

    /**
     * @param mixed $output
     */
    public function setOutput($output)
    {
        $this->output = $output;
    }

    /**
     * @return mixed
     */
    public function getResultCode()
    {
        return $this->resultCode;
    }

    /**
     * @param mixed $resultCode
     */
    public function setResultCode($resultCode)
    {
        $this->resultCode = $resultCode;
    }

    /**
     * @return bool
     */
    public function isPassed()
    {
        return $this->resultCode == StepResult::PASSED;
    }

    /**
     * @return bool
     */
    public function isSkipped()
    {
        return $this->resultCode == StepResult::SKIPPED;
    }

    /**
     * @return bool
     */
    public function isPending()
    {
        return ($this->resultCode == StepResult::PENDING || $this->resultCode == StepResult::UNDEFINED);
    }

    /**
     * @return bool
     */
    public function isFailed()
    {
        return $this->resultCode == StepResult::FAILED;
    }

    /**
     * @return mixed
     */
    public function getScreenshotSupport()
    {
        return $this->screenshot;
    }

    /**
     * @param mixed $screenshotSupport
     */
    public function setScreenshotSupport($screenshotSupport)
    {
        $this->screenshotSupport = $screenshotSupport;
    }

    /**
     * @return mixed
     */
    public function getScreenshot()
    {
        return $this->screenshot;
    }

    /**
     * @param mixed $screenshot
     */
    public function setScreenshot($screenshot)
    {
        $this->screenshot = $screenshot;
    }
}
