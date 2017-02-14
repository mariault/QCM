<?php

/* @Twig/Exception/error.txt.twig */
class __TwigTemplate_ae224a3fe15a379fb9b52b16a95e518d7d039e6bc692259297e7520ca8811b81 extends Twig_Template
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
        $__internal_a12086d368730b21c357b49938009ed7198f38b6e2f4443c82729fbbb32571d2 = $this->env->getExtension("native_profiler");
        $__internal_a12086d368730b21c357b49938009ed7198f38b6e2f4443c82729fbbb32571d2->enter($__internal_a12086d368730b21c357b49938009ed7198f38b6e2f4443c82729fbbb32571d2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.txt.twig"));

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
        
        $__internal_a12086d368730b21c357b49938009ed7198f38b6e2f4443c82729fbbb32571d2->leave($__internal_a12086d368730b21c357b49938009ed7198f38b6e2f4443c82729fbbb32571d2_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.txt.twig";
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
