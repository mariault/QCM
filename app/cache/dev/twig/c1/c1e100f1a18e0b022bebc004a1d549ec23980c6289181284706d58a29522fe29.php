<?php

/* @FOSUser/Group/show.html.twig */
class __TwigTemplate_7089eddfc1fcceef0bcbadc163789a766833a20486ce1f68ba921df7e41d7927 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/show.html.twig", 1);
        $this->blocks = array(
            'fos_user_content' => array($this, 'block_fos_user_content'),
        );
    }

    protected function doGetParent(array $context)
    {
        return "@FOSUser/layout.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_e5a3838dc712f547ab14544fdac15c9ba525e7453aebc8c34ace5491421d2ad2 = $this->env->getExtension("native_profiler");
        $__internal_e5a3838dc712f547ab14544fdac15c9ba525e7453aebc8c34ace5491421d2ad2->enter($__internal_e5a3838dc712f547ab14544fdac15c9ba525e7453aebc8c34ace5491421d2ad2_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_e5a3838dc712f547ab14544fdac15c9ba525e7453aebc8c34ace5491421d2ad2->leave($__internal_e5a3838dc712f547ab14544fdac15c9ba525e7453aebc8c34ace5491421d2ad2_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_bcccbdd602139244ba209378bcf1c7134e550d89c9598f43d316fca606817aa6 = $this->env->getExtension("native_profiler");
        $__internal_bcccbdd602139244ba209378bcf1c7134e550d89c9598f43d316fca606817aa6->enter($__internal_bcccbdd602139244ba209378bcf1c7134e550d89c9598f43d316fca606817aa6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_bcccbdd602139244ba209378bcf1c7134e550d89c9598f43d316fca606817aa6->leave($__internal_bcccbdd602139244ba209378bcf1c7134e550d89c9598f43d316fca606817aa6_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/show.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  40 => 4,  34 => 3,  11 => 1,);
    }
}
/* {% extends "@FOSUser/layout.html.twig" %}*/
/* */
/* {% block fos_user_content %}*/
/* {% include "@FOSUser/Group/show_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
