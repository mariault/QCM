<?php

/* @Twig/Exception/exception.json.twig */
class __TwigTemplate_bb6e017b0220623dc42485c2ccd1ca95005f4a20ee9d1c4c80ad7749f2d751f5 extends Twig_Template
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
        $__internal_23769ce461e5245b64d1b593c5e41ed035ee0aeba38732bc2f4c6299099dddfa = $this->env->getExtension("native_profiler");
        $__internal_23769ce461e5245b64d1b593c5e41ed035ee0aeba38732bc2f4c6299099dddfa->enter($__internal_23769ce461e5245b64d1b593c5e41ed035ee0aeba38732bc2f4c6299099dddfa_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception.json.twig"));

        // line 1
        echo twig_jsonencode_filter(array("error" => array("code" => (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "message" => (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "exception" => $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "toarray", array()))));
        echo "
";
        
        $__internal_23769ce461e5245b64d1b593c5e41ed035ee0aeba38732bc2f4c6299099dddfa->leave($__internal_23769ce461e5245b64d1b593c5e41ed035ee0aeba38732bc2f4c6299099dddfa_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception.json.twig";
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
