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
        $__internal_d0a5bde93c383308628163f178ea98730fff05ed64f914eb182a36322cca7a3d = $this->env->getExtension("native_profiler");
        $__internal_d0a5bde93c383308628163f178ea98730fff05ed64f914eb182a36322cca7a3d->enter($__internal_d0a5bde93c383308628163f178ea98730fff05ed64f914eb182a36322cca7a3d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Twig/Exception/exception_full.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_d0a5bde93c383308628163f178ea98730fff05ed64f914eb182a36322cca7a3d->leave($__internal_d0a5bde93c383308628163f178ea98730fff05ed64f914eb182a36322cca7a3d_prof);

    }

    // line 3
    public function block_head($context, array $blocks = array())
    {
        $__internal_c47392895db093868ea7e38b19f7a3ce4ac71574d2a32c2ef37111f65116e89c = $this->env->getExtension("native_profiler");
        $__internal_c47392895db093868ea7e38b19f7a3ce4ac71574d2a32c2ef37111f65116e89c->enter($__internal_c47392895db093868ea7e38b19f7a3ce4ac71574d2a32c2ef37111f65116e89c_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "head"));

        // line 4
        echo "    <link href=\"";
        echo twig_escape_filter($this->env, $this->env->getExtension('request')->generateAbsoluteUrl($this->env->getExtension('asset')->getAssetUrl("bundles/framework/css/exception.css")), "html", null, true);
        echo "\" rel=\"stylesheet\" type=\"text/css\" media=\"all\" />
";
        
        $__internal_c47392895db093868ea7e38b19f7a3ce4ac71574d2a32c2ef37111f65116e89c->leave($__internal_c47392895db093868ea7e38b19f7a3ce4ac71574d2a32c2ef37111f65116e89c_prof);

    }

    // line 7
    public function block_title($context, array $blocks = array())
    {
        $__internal_7ad391d947ab0f15f18ef97f685e83bc139e7861b64cff8de8c58143cb4c5905 = $this->env->getExtension("native_profiler");
        $__internal_7ad391d947ab0f15f18ef97f685e83bc139e7861b64cff8de8c58143cb4c5905->enter($__internal_7ad391d947ab0f15f18ef97f685e83bc139e7861b64cff8de8c58143cb4c5905_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        // line 8
        echo "    ";
        echo twig_escape_filter($this->env, $this->getAttribute((isset($context["exception"]) ? $context["exception"] : $this->getContext($context, "exception")), "message", array()), "html", null, true);
        echo " (";
        echo twig_escape_filter($this->env, (isset($context["status_code"]) ? $context["status_code"] : $this->getContext($context, "status_code")), "html", null, true);
        echo " ";
        echo twig_escape_filter($this->env, (isset($context["status_text"]) ? $context["status_text"] : $this->getContext($context, "status_text")), "html", null, true);
        echo ")
";
        
        $__internal_7ad391d947ab0f15f18ef97f685e83bc139e7861b64cff8de8c58143cb4c5905->leave($__internal_7ad391d947ab0f15f18ef97f685e83bc139e7861b64cff8de8c58143cb4c5905_prof);

    }

    // line 11
    public function block_body($context, array $blocks = array())
    {
        $__internal_d7f18148e653ab2dded8fe3df290da5b683150e9962e23a48283178d97eba620 = $this->env->getExtension("native_profiler");
        $__internal_d7f18148e653ab2dded8fe3df290da5b683150e9962e23a48283178d97eba620->enter($__internal_d7f18148e653ab2dded8fe3df290da5b683150e9962e23a48283178d97eba620_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 12
        echo "    ";
        $this->loadTemplate("@Twig/Exception/exception.html.twig", "@Twig/Exception/exception_full.html.twig", 12)->display($context);
        
        $__internal_d7f18148e653ab2dded8fe3df290da5b683150e9962e23a48283178d97eba620->leave($__internal_d7f18148e653ab2dded8fe3df290da5b683150e9962e23a48283178d97eba620_prof);

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
