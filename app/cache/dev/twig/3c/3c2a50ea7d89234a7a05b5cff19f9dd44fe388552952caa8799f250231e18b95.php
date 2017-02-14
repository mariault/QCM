<?php

/* FOSUserBundle:Group:show.html.twig */
class __TwigTemplate_712792e80c9e0e7aa61838eac001ced94eb63915c855d000495861e8f4914315 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "FOSUserBundle:Group:show.html.twig", 1);
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
        $__internal_78fdad7058a95a3e58e9ed1ca1acfeb52f250b83ec14130908e4e7cf1167e3f8 = $this->env->getExtension("native_profiler");
        $__internal_78fdad7058a95a3e58e9ed1ca1acfeb52f250b83ec14130908e4e7cf1167e3f8->enter($__internal_78fdad7058a95a3e58e9ed1ca1acfeb52f250b83ec14130908e4e7cf1167e3f8_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "FOSUserBundle:Group:show.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_78fdad7058a95a3e58e9ed1ca1acfeb52f250b83ec14130908e4e7cf1167e3f8->leave($__internal_78fdad7058a95a3e58e9ed1ca1acfeb52f250b83ec14130908e4e7cf1167e3f8_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_95e14199d1aee76356ef24b08dd6dc74894a91219b1be0d3531948b3db9506f5 = $this->env->getExtension("native_profiler");
        $__internal_95e14199d1aee76356ef24b08dd6dc74894a91219b1be0d3531948b3db9506f5->enter($__internal_95e14199d1aee76356ef24b08dd6dc74894a91219b1be0d3531948b3db9506f5_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/show_content.html.twig", "FOSUserBundle:Group:show.html.twig", 4)->display($context);
        
        $__internal_95e14199d1aee76356ef24b08dd6dc74894a91219b1be0d3531948b3db9506f5->leave($__internal_95e14199d1aee76356ef24b08dd6dc74894a91219b1be0d3531948b3db9506f5_prof);

    }

    public function getTemplateName()
    {
        return "FOSUserBundle:Group:show.html.twig";
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
