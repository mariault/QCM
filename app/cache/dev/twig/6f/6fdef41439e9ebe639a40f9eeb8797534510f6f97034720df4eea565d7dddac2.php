<?php

/* TwigBundle:Exception:exception.json.twig */
class __TwigTemplate_240f28c596bff3bb7e7cce1bd06a651f23003cbce4d6d6a26ad99849afb9cbb8 extends Twig_Template
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
        $__internal_b64e09e5791945901db0e442ee10cb97422d40a8c06e090ca12ab976ec336bf3 = $this->env->getExtension("native_profiler");
        $__internal_b64e09e5791945901db0e442ee10cb97422d40a8c06e090ca12ab976ec336bf3->enter($__internal_b64e09e5791945901db0e442ee10cb97422d40a8c06e090ca12ab976ec336bf3_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_b64e09e5791945901db0e442ee10cb97422d40a8c06e090ca12ab976ec336bf3->leave($__internal_b64e09e5791945901db0e442ee10cb97422d40a8c06e090ca12ab976ec336bf3_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:exception.json.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  22 => 1,);
    }
}
/* {{ { 'error': { 'code': status_code, 'message': status_text, 'exception': exception.toarray } }|json_encode|raw }}*/
/* */
