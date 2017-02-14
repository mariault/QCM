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
        $__internal_2887b29df429305b594b3c0a9554d165eb294cf1d79fa444cbccb1cf721ad005 = $this->env->getExtension("native_profiler");
        $__internal_2887b29df429305b594b3c0a9554d165eb294cf1d79fa444cbccb1cf721ad005->enter($__internal_2887b29df429305b594b3c0a9554d165eb294cf1d79fa444cbccb1cf721ad005_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_2887b29df429305b594b3c0a9554d165eb294cf1d79fa444cbccb1cf721ad005->leave($__internal_2887b29df429305b594b3c0a9554d165eb294cf1d79fa444cbccb1cf721ad005_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_7f4c762e44d0c24f281e056485631c9390b6e41fc98c773199afddf2b36d6075 = $this->env->getExtension("native_profiler");
        $__internal_7f4c762e44d0c24f281e056485631c9390b6e41fc98c773199afddf2b36d6075->enter($__internal_7f4c762e44d0c24f281e056485631c9390b6e41fc98c773199afddf2b36d6075_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "@FOSUser/Group/show.html.twig", 4)->display($context);
        
        $__internal_7f4c762e44d0c24f281e056485631c9390b6e41fc98c773199afddf2b36d6075->leave($__internal_7f4c762e44d0c24f281e056485631c9390b6e41fc98c773199afddf2b36d6075_prof);

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
