<?php

/* @FOSUser/Group/new.html.twig */
class __TwigTemplate_f266ffbabbbb293c19d1307f184ad6b11a20f50a4576e5e404c3747565929ceb extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/new.html.twig", 1);
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
        $__internal_a4140e3a755b38fe2354c63e3b04b83e75172a4d1aea7a22742b073953a91224 = $this->env->getExtension("native_profiler");
        $__internal_a4140e3a755b38fe2354c63e3b04b83e75172a4d1aea7a22742b073953a91224->enter($__internal_a4140e3a755b38fe2354c63e3b04b83e75172a4d1aea7a22742b073953a91224_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/new.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_a4140e3a755b38fe2354c63e3b04b83e75172a4d1aea7a22742b073953a91224->leave($__internal_a4140e3a755b38fe2354c63e3b04b83e75172a4d1aea7a22742b073953a91224_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_c5385dc02e358b08759098ba5802afcc63259d2ca1f7e6239999bc7300fd8180 = $this->env->getExtension("native_profiler");
        $__internal_c5385dc02e358b08759098ba5802afcc63259d2ca1f7e6239999bc7300fd8180->enter($__internal_c5385dc02e358b08759098ba5802afcc63259d2ca1f7e6239999bc7300fd8180_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/new_content.html.twig", "@FOSUser/Group/new.html.twig", 4)->display($context);
        
        $__internal_c5385dc02e358b08759098ba5802afcc63259d2ca1f7e6239999bc7300fd8180->leave($__internal_c5385dc02e358b08759098ba5802afcc63259d2ca1f7e6239999bc7300fd8180_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/new.html.twig";
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
/* {% include "@FOSUser/Group/new_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
