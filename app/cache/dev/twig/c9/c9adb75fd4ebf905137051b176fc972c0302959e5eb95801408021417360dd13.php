<?php

/* @Twig/Exception/error.js.twig */
class __TwigTemplate_9fca01b8419cb2b13d77d03b973738a1de68a59e59911f3f6ed736e2763ca3c6 extends Twig_Template
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
        $__internal_ea57c574bd1bde4f140819bc5b17420f4e5a60453a57cebb2b07b0b035cfb157 = $this->env->getExtension("native_profiler");
        $__internal_ea57c574bd1bde4f140819bc5b17420f4e5a60453a57cebb2b07b0b035cfb157->enter($__internal_ea57c574bd1bde4f140819bc5b17420f4e5a60453a57cebb2b07b0b035cfb157_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/error.js.twig"));

        // line 1
        echo "/*
";
        // line 2
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "js", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "js", null, true);
        echo "

*/
";
        
        $__internal_ea57c574bd1bde4f140819bc5b17420f4e5a60453a57cebb2b07b0b035cfb157->leave($__internal_ea57c574bd1bde4f140819bc5b17420f4e5a60453a57cebb2b07b0b035cfb157_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/error.js.twig";
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
