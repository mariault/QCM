<?php

/* WebProfilerBundle:Profiler:toolbar_redirect.html.twig */
class __TwigTemplate_a5e727c686bb44e1e90ccb1d547c6af04a9435393c3800a44ebed8a53a4c2309 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig", 1);
        $this->blocks = array(
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
        $__internal_01ae84710b09bc51dde74753ac574a0b5ca514be904f678c05b3d38b32648a01 = $this->env->getExtension("native_profiler");
        $__internal_01ae84710b09bc51dde74753ac574a0b5ca514be904f678c05b3d38b32648a01->enter($__internal_01ae84710b09bc51dde74753ac574a0b5ca514be904f678c05b3d38b32648a01_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Profiler:toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_01ae84710b09bc51dde74753ac574a0b5ca514be904f678c05b3d38b32648a01->leave($__internal_01ae84710b09bc51dde74753ac574a0b5ca514be904f678c05b3d38b32648a01_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0acef2b7fc56a90f24f7be51edd383cfe445d5f2cc83d3ce2fe79da0107c095a = $this->env->getExtension("native_profiler");
        $__internal_0acef2b7fc56a90f24f7be51edd383cfe445d5f2cc83d3ce2fe79da0107c095a->enter($__internal_0acef2b7fc56a90f24f7be51edd383cfe445d5f2cc83d3ce2fe79da0107c095a_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0acef2b7fc56a90f24f7be51edd383cfe445d5f2cc83d3ce2fe79da0107c095a->leave($__internal_0acef2b7fc56a90f24f7be51edd383cfe445d5f2cc83d3ce2fe79da0107c095a_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_ec80bb974868c701f9fecb97f406be251984e8a1aaeec7f9c2319954917b4068 = $this->env->getExtension("native_profiler");
        $__internal_ec80bb974868c701f9fecb97f406be251984e8a1aaeec7f9c2319954917b4068->enter($__internal_ec80bb974868c701f9fecb97f406be251984e8a1aaeec7f9c2319954917b4068_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

        // line 6
        echo "    <div class=\"sf-reset\">
        <div class=\"block-exception\">
            <h1>This request redirects to <a href=\"";
        // line 8
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "\">";
        echo twig_escape_filter($this->env, (isset($context["location"]) ? $context["location"] : $this->getContext($context, "location")), "html", null, true);
        echo "</a>.</h1>

            <p>
                <small>
                    The redirect was intercepted by the web debug toolbar to help debugging.
                    For more information, see the \"intercept-redirects\" option of the Profiler.
                </small>
            </p>
        </div>
    </div>
";
        
        $__internal_ec80bb974868c701f9fecb97f406be251984e8a1aaeec7f9c2319954917b4068->leave($__internal_ec80bb974868c701f9fecb97f406be251984e8a1aaeec7f9c2319954917b4068_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Profiler:toolbar_redirect.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  57 => 8,  53 => 6,  47 => 5,  35 => 3,  11 => 1,);
    }
}
/* {% extends '@Twig/layout.html.twig' %}*/
/* */
/* {% block title 'Redirection Intercepted' %}*/
/* */
/* {% block body %}*/
/*     <div class="sf-reset">*/
/*         <div class="block-exception">*/
/*             <h1>This request redirects to <a href="{{ location }}">{{ location }}</a>.</h1>*/
/* */
/*             <p>*/
/*                 <small>*/
/*                     The redirect was intercepted by the web debug toolbar to help debugging.*/
/*                     For more information, see the "intercept-redirects" option of the Profiler.*/
/*                 </small>*/
/*             </p>*/
/*         </div>*/
/*     </div>*/
/* {% endblock %}*/
/* */
