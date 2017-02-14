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
        $__internal_e9281b021155886cb9962567a3bfb58b5611e6eea67698a07291605d7fb9efb1 = $this->env->getExtension("native_profiler");
        $__internal_e9281b021155886cb9962567a3bfb58b5611e6eea67698a07291605d7fb9efb1->enter($__internal_e9281b021155886cb9962567a3bfb58b5611e6eea67698a07291605d7fb9efb1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e9281b021155886cb9962567a3bfb58b5611e6eea67698a07291605d7fb9efb1->leave($__internal_e9281b021155886cb9962567a3bfb58b5611e6eea67698a07291605d7fb9efb1_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_04d88541b867eb52fc51aa3533882d55f91f2d10e4d0a7b9978b4dab21d623d0 = $this->env->getExtension("native_profiler");
        $__internal_04d88541b867eb52fc51aa3533882d55f91f2d10e4d0a7b9978b4dab21d623d0->enter($__internal_04d88541b867eb52fc51aa3533882d55f91f2d10e4d0a7b9978b4dab21d623d0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_04d88541b867eb52fc51aa3533882d55f91f2d10e4d0a7b9978b4dab21d623d0->leave($__internal_04d88541b867eb52fc51aa3533882d55f91f2d10e4d0a7b9978b4dab21d623d0_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_cc588e99a6afc1dd7b2b484d5f25ebd633eff150dbbd98f7e5595f9bdbd98eb4 = $this->env->getExtension("native_profiler");
        $__internal_cc588e99a6afc1dd7b2b484d5f25ebd633eff150dbbd98f7e5595f9bdbd98eb4->enter($__internal_cc588e99a6afc1dd7b2b484d5f25ebd633eff150dbbd98f7e5595f9bdbd98eb4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_cc588e99a6afc1dd7b2b484d5f25ebd633eff150dbbd98f7e5595f9bdbd98eb4->leave($__internal_cc588e99a6afc1dd7b2b484d5f25ebd633eff150dbbd98f7e5595f9bdbd98eb4_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_154af548a388d298ff39acd5f57b25cd916647bbf4f3142e6fe6a39f7bef48db = $this->env->getExtension("native_profiler");
        $__internal_154af548a388d298ff39acd5f57b25cd916647bbf4f3142e6fe6a39f7bef48db->enter($__internal_154af548a388d298ff39acd5f57b25cd916647bbf4f3142e6fe6a39f7bef48db_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_154af548a388d298ff39acd5f57b25cd916647bbf4f3142e6fe6a39f7bef48db->leave($__internal_154af548a388d298ff39acd5f57b25cd916647bbf4f3142e6fe6a39f7bef48db_prof);

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
