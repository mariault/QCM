<?php

/* @WebProfiler/Profiler/toolbar_redirect.html.twig */
class __TwigTemplate_c87f9287851e5034cc25ab4d156906889abc0a8d2fda2839a5bb146d643e8044 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@Twig/layout.html.twig", "@WebProfiler/Profiler/toolbar_redirect.html.twig", 1);
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
        $__internal_0ed7032fad7341b9d4eff5be1343ba58a3f7a9283b0212b982123418fcb4b4fc = $this->env->getExtension("native_profiler");
        $__internal_0ed7032fad7341b9d4eff5be1343ba58a3f7a9283b0212b982123418fcb4b4fc->enter($__internal_0ed7032fad7341b9d4eff5be1343ba58a3f7a9283b0212b982123418fcb4b4fc_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@WebProfiler/Profiler/toolbar_redirect.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0ed7032fad7341b9d4eff5be1343ba58a3f7a9283b0212b982123418fcb4b4fc->leave($__internal_0ed7032fad7341b9d4eff5be1343ba58a3f7a9283b0212b982123418fcb4b4fc_prof);

    }

    // line 3
    public function block_title($context, array $blocks = array())
    {
        $__internal_0301afeeab0e9c751c4657c9ebac71ce6f2d6a725dbc17dbd393cfde95f6869b = $this->env->getExtension("native_profiler");
        $__internal_0301afeeab0e9c751c4657c9ebac71ce6f2d6a725dbc17dbd393cfde95f6869b->enter($__internal_0301afeeab0e9c751c4657c9ebac71ce6f2d6a725dbc17dbd393cfde95f6869b_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "title"));

        echo "Redirection Intercepted";
        
        $__internal_0301afeeab0e9c751c4657c9ebac71ce6f2d6a725dbc17dbd393cfde95f6869b->leave($__internal_0301afeeab0e9c751c4657c9ebac71ce6f2d6a725dbc17dbd393cfde95f6869b_prof);

    }

    // line 5
    public function block_body($context, array $blocks = array())
    {
        $__internal_b86a5dd08e70f8dda6e45c2567bea2dd257542f8d49db5e37f9da415180bf78d = $this->env->getExtension("native_profiler");
        $__internal_b86a5dd08e70f8dda6e45c2567bea2dd257542f8d49db5e37f9da415180bf78d->enter($__internal_b86a5dd08e70f8dda6e45c2567bea2dd257542f8d49db5e37f9da415180bf78d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "body"));

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
        
        $__internal_b86a5dd08e70f8dda6e45c2567bea2dd257542f8d49db5e37f9da415180bf78d->leave($__internal_b86a5dd08e70f8dda6e45c2567bea2dd257542f8d49db5e37f9da415180bf78d_prof);

    }

    public function getTemplateName()
    {
        return "@WebProfiler/Profiler/toolbar_redirect.html.twig";
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
