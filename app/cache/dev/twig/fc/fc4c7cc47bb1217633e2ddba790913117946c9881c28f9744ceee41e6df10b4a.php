<?php

/* FOSUserBundle:Resetting:reset.html.twig */
class __TwigTemplate_969584249b61827b20c86378cba9956d37d499551f692ff391d7a64cf6c51dde extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 1);
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
        $__internal_cffb661115c58c45276a91f7bb704c173a4503fa8cbb2f2dd11bd97adb165a29 = $this->env->getExtension("native_profiler");
        $__internal_cffb661115c58c45276a91f7bb704c173a4503fa8cbb2f2dd11bd97adb165a29->enter($__internal_cffb661115c58c45276a91f7bb704c173a4503fa8cbb2f2dd11bd97adb165a29_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Resetting:reset.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_cffb661115c58c45276a91f7bb704c173a4503fa8cbb2f2dd11bd97adb165a29->leave($__internal_cffb661115c58c45276a91f7bb704c173a4503fa8cbb2f2dd11bd97adb165a29_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_46befd991b84f1d320fdf096f19f1d53b7032527535d942d83ff20fc06f20fd0 = $this->env->getExtension("native_profiler");
        $__internal_46befd991b84f1d320fdf096f19f1d53b7032527535d942d83ff20fc06f20fd0->enter($__internal_46befd991b84f1d320fdf096f19f1d53b7032527535d942d83ff20fc06f20fd0_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Resetting/reset_content.html.twig", "FOSUserBundle:Resetting:reset.html.twig", 4)->display($context);
        
        $__internal_46befd991b84f1d320fdf096f19f1d53b7032527535d942d83ff20fc06f20fd0->leave($__internal_46befd991b84f1d320fdf096f19f1d53b7032527535d942d83ff20fc06f20fd0_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Resetting:reset.html.twig";
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
/* {% include "@FOSUser/Resetting/reset_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
