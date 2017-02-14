<?php

/* WebProfilerBundle:Collector:router.html.twig */
class __TwigTemplate_ef4fa1c6bc8b6a928705f13966d0a8055cfe8ca0a7f88684ab12e916d48626bb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@WebProfiler/Profiler/layout.html.twig", "WebProfilerBundle:Collector:router.html.twig", 1);
        $this->blocks = array(
            'toolbar' => array($this, 'block_toolbar'),
            'menu' => array($this, 'block_menu'),
            'panel' => array($this, 'block_panel'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@WebProfiler/Profiler/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_0111765b2ed83e46c8ca3ced2aa5d2dd7d6947221fe15062dac60493f87efd87 = $this->env->getExtension("native_profiler");
        $__internal_0111765b2ed83e46c8ca3ced2aa5d2dd7d6947221fe15062dac60493f87efd87->enter($__internal_0111765b2ed83e46c8ca3ced2aa5d2dd7d6947221fe15062dac60493f87efd87_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_0111765b2ed83e46c8ca3ced2aa5d2dd7d6947221fe15062dac60493f87efd87->leave($__internal_0111765b2ed83e46c8ca3ced2aa5d2dd7d6947221fe15062dac60493f87efd87_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_81b357af21dcf28cd1cfc53d75f96fba4ca7d38e36853c95a5dbf4565032e2af = $this->env->getExtension("native_profiler");
        $__internal_81b357af21dcf28cd1cfc53d75f96fba4ca7d38e36853c95a5dbf4565032e2af->enter($__internal_81b357af21dcf28cd1cfc53d75f96fba4ca7d38e36853c95a5dbf4565032e2af_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_81b357af21dcf28cd1cfc53d75f96fba4ca7d38e36853c95a5dbf4565032e2af->leave($__internal_81b357af21dcf28cd1cfc53d75f96fba4ca7d38e36853c95a5dbf4565032e2af_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_d2b8fc5a330e690f8d7ee6ef8c746ceb5fb1f6c9bae633592cd668d11fe34197 = $this->env->getExtension("native_profiler");
        $__internal_d2b8fc5a330e690f8d7ee6ef8c746ceb5fb1f6c9bae633592cd668d11fe34197->enter($__internal_d2b8fc5a330e690f8d7ee6ef8c746ceb5fb1f6c9bae633592cd668d11fe34197_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_d2b8fc5a330e690f8d7ee6ef8c746ceb5fb1f6c9bae633592cd668d11fe34197->leave($__internal_d2b8fc5a330e690f8d7ee6ef8c746ceb5fb1f6c9bae633592cd668d11fe34197_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_951e40eef927e4f0e55e4746b66ccd937bb1c7dc85641b8bf6550d082d8eea70 = $this->env->getExtension("native_profiler");
        $__internal_951e40eef927e4f0e55e4746b66ccd937bb1c7dc85641b8bf6550d082d8eea70->enter($__internal_951e40eef927e4f0e55e4746b66ccd937bb1c7dc85641b8bf6550d082d8eea70_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_951e40eef927e4f0e55e4746b66ccd937bb1c7dc85641b8bf6550d082d8eea70->leave($__internal_951e40eef927e4f0e55e4746b66ccd937bb1c7dc85641b8bf6550d082d8eea70_prof);

    }

    public function getTemplateName()
    {
        return "WebProfilerBundle:Collector:router.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  73 => 13,  67 => 12,  56 => 7,  53 => 6,  47 => 5,  36 => 3,  11 => 1,);
    }
}
/* {% extends '@WebProfiler/Profiler/layout.html.twig' %}*/
/* */
/* {% block toolbar %}{% endblock %}*/
/* */
/* {% block menu %}*/
/* <span class="label">*/
/*     <span class="icon">{{ include('@WebProfiler/Icon/router.svg') }}</span>*/
/*     <strong>Routing</strong>*/
/* </span>*/
/* {% endblock %}*/
/* */
/* {% block panel %}*/
/*     {{ render(path('_profiler_router', { token: token })) }}*/
/* {% endblock %}*/
/* */
