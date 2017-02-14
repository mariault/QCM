<?php

/* TwigBundle:Exception:error.json.twig */
class __TwigTemplate_c07490a6e28ea6cb30e3f872a1e8aa44dc99e16b1c7002c2a86c75c393c58e4a extends Twig_Template
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
        $__internal_ef4cd393b8e2246104bc77107a0ddb1587426eedb10fd392c244ea5f1bb3b411 = $this->env->getExtension("native_profiler");
        $__internal_ef4cd393b8e2246104bc77107a0ddb1587426eedb10fd392c244ea5f1bb3b411->enter($__internal_ef4cd393b8e2246104bc77107a0ddb1587426eedb10fd392c244ea5f1bb3b411_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "TwigBundle:Exception:error.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")))));
        echo "
";
        
        $__internal_ef4cd393b8e2246104bc77107a0ddb1587426eedb10fd392c244ea5f1bb3b411->leave($__internal_ef4cd393b8e2246104bc77107a0ddb1587426eedb10fd392c244ea5f1bb3b411_prof);

    }

    public function getTemplateName()
    {
        return "TwigBundle:Exception:error.json.twig";
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
/* {{ { 'error': { 'code': status_code, 'message': status_text } }|json_encode|raw }}*/
/* */
