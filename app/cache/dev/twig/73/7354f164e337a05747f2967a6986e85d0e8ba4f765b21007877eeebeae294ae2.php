<?php

/* @Twig/Exception/exception_full.html.twig */
class __TwigTemplate_caf84ac3f0b2388c016c40191f53720d93179ab2873f50d6f7183e9c0f804da0 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@Twig/Exception/exception_full.html.twig", 1);
        $this->blocks = array(
            'head' => array($this, 'block_head'),
            'title' => array($this, 'block_title'),
            'body' => array($this, 'block_body'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@Twig/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_a20823921510fb71ffe9ff40c1522f1691f479dd9c36cfc2aef496bec0edb81c = $this->env->getExtension("native_profiler");
        $__internal_a20823921510fb71ffe9ff40c1522f1691f479dd9c36cfc2aef496bec0edb81c->enter($__internal_a20823921510fb71ffe9ff40c1522f1691f479dd9c36cfc2aef496bec0edb81c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a20823921510fb71ffe9ff40c1522f1691f479dd9c36cfc2aef496bec0edb81c->leave($__internal_a20823921510fb71ffe9ff40c1522f1691f479dd9c36cfc2aef496bec0edb81c_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_789180cee92a0fd5e93c95f328ada0241a2fb85d0fcbdf93adf4d9af24d74704 = $this->env->getExtension("native_profiler");
        $__internal_789180cee92a0fd5e93c95f328ada0241a2fb85d0fcbdf93adf4d9af24d74704->enter($__internal_789180cee92a0fd5e93c95f328ada0241a2fb85d0fcbdf93adf4d9af24d74704_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_789180cee92a0fd5e93c95f328ada0241a2fb85d0fcbdf93adf4d9af24d74704->leave($__internal_789180cee92a0fd5e93c95f328ada0241a2fb85d0fcbdf93adf4d9af24d74704_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_660fee1a0a80c5fd331a59f0334d44e19dd320313b18ee61dc6f1056f7693546 = $this->env->getExtension("native_profiler");
        $__internal_660fee1a0a80c5fd331a59f0334d44e19dd320313b18ee61dc6f1056f7693546->enter($__internal_660fee1a0a80c5fd331a59f0334d44e19dd320313b18ee61dc6f1056f7693546_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_660fee1a0a80c5fd331a59f0334d44e19dd320313b18ee61dc6f1056f7693546->leave($__internal_660fee1a0a80c5fd331a59f0334d44e19dd320313b18ee61dc6f1056f7693546_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_2f77bea27193498800735d1dd819a8a0c38de017250f2328dc78fed84b1bd138 = $this->env->getExtension("native_profiler");
        $__internal_2f77bea27193498800735d1dd819a8a0c38de017250f2328dc78fed84b1bd138->enter($__internal_2f77bea27193498800735d1dd819a8a0c38de017250f2328dc78fed84b1bd138_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_2f77bea27193498800735d1dd819a8a0c38de017250f2328dc78fed84b1bd138->leave($__internal_2f77bea27193498800735d1dd819a8a0c38de017250f2328dc78fed84b1bd138_prof);

    }

    public function getTemplateName()
    {
        return "@Twig/Exception/exception_full.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  78 => 12,  72 => 11,  58 => 8,  52 => 7,  42 => 4,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block head %}*/
/*     <link href="{{ absolute_url(asset('bundles/framework/css/exception.css')) }}" rel="stylesheet" type="text/css" media="all" />*/
/* {% endblock %}*/
/* */
/* {% block title %}*/
/*     {{ exception.message }} ({{ status_code }} {{ status_text }})*/
/* {% endblock %}*/
/* */
/* {% block body %}*/
/*     {% include '@Twig/Exception/exception.html.twig' %}*/
/* {% endblock %}*/
/* */
