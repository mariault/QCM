<?php

/* @Twig/Exception/error.css.twig */
class __TwigTemplate_96f2770c0cc0cc38859a92ab9c5424a39486365bf30da11ca03f51c2aa47c446 extends Twig_Template
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
        $__internal_9dd7ba6e1600d6ad6292301196f9770607aa05b3f78586bd37b442626c3f4cbd = $this->env->getExtension("native_profiler");
        $__internal_9dd7ba6e1600d6ad6292301196f9770607aa05b3f78586bd37b442626c3f4cbd->enter($__internal_9dd7ba6e1600d6ad6292301196f9770607aa05b3f78586bd37b442626c3f4cbd_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.css.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "css", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "css", null, true);
        echo "

*/
";
        
        $__internal_9dd7ba6e1600d6ad6292301196f9770607aa05b3f78586bd37b442626c3f4cbd->leave($__internal_9dd7ba6e1600d6ad6292301196f9770607aa05b3f78586bd37b442626c3f4cbd_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.css.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  25 => 2,  22 => 1,);
    }
}
/* /**/
/* {{ status_code }} {{ status_text }}*/
/* */
/* *//* */
/* */
