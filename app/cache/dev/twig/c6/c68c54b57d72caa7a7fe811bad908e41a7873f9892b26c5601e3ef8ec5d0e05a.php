<?php

/* TwigBundle:Exception:error.txt.twig */
class __TwigTemplate_1dc46bf1b3282f022a22f39a9d0c2bed95a6e748f89eae408a20b96c69fafd54 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_356837aaded70b4ef074389a370e8649950253858c95b4f4f4f3583eaa7d3c10 = $this->env->getExtension("native_profiler");
        $__internal_356837aaded70b4ef074389a370e8649950253858c95b4f4f4f3583eaa7d3c10->enter($__internal_356837aaded70b4ef074389a370e8649950253858c95b4f4f4f3583eaa7d3c10_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.txt.twig"));

        // line 1
        echo "Oops! An Error Occurred
=======================

The server returned a \"";
        // line 4
        echo (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code"));
        echo " ";
        echo (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text"));
        echo "\".

Something is broken. Please let us know what you were doing when this error occurred.
We will fix it as soon as possible. Sorry for any inconvenience caused.
";
        
        $__internal_356837aaded70b4ef074389a370e8649950253858c95b4f4f4f3583eaa7d3c10->leave($__internal_356837aaded70b4ef074389a370e8649950253858c95b4f4f4f3583eaa7d3c10_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.txt.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  27 => 4,  22 => 1,);
    }
}
/* Oops! An Error Occurred*/
/* =======================*/
/* */
/* The server returned a "{{ status_code }} {{ status_text }}".*/
/* */
/* Something is broken. Please let us know what you were doing when this error occurred.*/
/* We will fix it as soon as possible. Sorry for any inconvenience caused.*/
/* */
