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
        $__internal_4885b33971c44343597ed5db2573dc0cb56b44d5e67623a0d46b99234e0e7f99 = $this->env->getExtension("native_profiler");
        $__internal_4885b33971c44343597ed5db2573dc0cb56b44d5e67623a0d46b99234e0e7f99->enter($__internal_4885b33971c44343597ed5db2573dc0cb56b44d5e67623a0d46b99234e0e7f99_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "WebProfilerBundle:Collector:router.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_4885b33971c44343597ed5db2573dc0cb56b44d5e67623a0d46b99234e0e7f99->leave($__internal_4885b33971c44343597ed5db2573dc0cb56b44d5e67623a0d46b99234e0e7f99_prof);

    }

    // line 3
    public function block_toolbar($context, array $blocks = array())
    {
        $__internal_b471bb4c3f4aacec9612eae0685df1b8c90ab3d08a71b813528283cc0f7185eb = $this->env->getExtension("native_profiler");
        $__internal_b471bb4c3f4aacec9612eae0685df1b8c90ab3d08a71b813528283cc0f7185eb->enter($__internal_b471bb4c3f4aacec9612eae0685df1b8c90ab3d08a71b813528283cc0f7185eb_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "toolbar"));

        
        $__internal_b471bb4c3f4aacec9612eae0685df1b8c90ab3d08a71b813528283cc0f7185eb->leave($__internal_b471bb4c3f4aacec9612eae0685df1b8c90ab3d08a71b813528283cc0f7185eb_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = array())
    {
        $__internal_707a616bb4ee08bd943ecd0ccdb73a200e4e1c53196bf93f6b3b4c7df8ab724d = $this->env->getExtension("native_profiler");
        $__internal_707a616bb4ee08bd943ecd0ccdb73a200e4e1c53196bf93f6b3b4c7df8ab724d->enter($__internal_707a616bb4ee08bd943ecd0ccdb73a200e4e1c53196bf93f6b3b4c7df8ab724d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<span class=\"label\">
    <span class=\"icon\">";
        // line 7
        echo twig_include($this->env, $context, "@WebProfiler/Icon/router.svg");
        echo "</span>
    <strong>Routing</strong>
</span>
";
        
        $__internal_707a616bb4ee08bd943ecd0ccdb73a200e4e1c53196bf93f6b3b4c7df8ab724d->leave($__internal_707a616bb4ee08bd943ecd0ccdb73a200e4e1c53196bf93f6b3b4c7df8ab724d_prof);

    }

    // line 12
    public function block_panel($context, array $blocks = array())
    {
        $__internal_ae299d0662427b2615e0338f2161d39485d41f33d2dc4ad1139abb2df82e49d1 = $this->env->getExtension("native_profiler");
        $__internal_ae299d0662427b2615e0338f2161d39485d41f33d2dc4ad1139abb2df82e49d1->enter($__internal_ae299d0662427b2615e0338f2161d39485d41f33d2dc4ad1139abb2df82e49d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "panel"));

        // line 13
        echo "    ";
        echo $this->env->getExtension('http_kernel')->renderFragment($this->env->getExtension('routing')->getPath("_profiler_router", array("token" => (isset($context["token"]) ? $context["token"] : $this->getContext($context, "token")))));
        echo "
";
        
        $__internal_ae299d0662427b2615e0338f2161d39485d41f33d2dc4ad1139abb2df82e49d1->leave($__internal_ae299d0662427b2615e0338f2161d39485d41f33d2dc4ad1139abb2df82e49d1_prof);

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
