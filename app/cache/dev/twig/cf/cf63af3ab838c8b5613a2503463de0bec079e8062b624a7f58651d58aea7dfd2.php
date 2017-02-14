<?php

/* @FOSUser/Group/edit.html.twig */
class __TwigTemplate_8bf2624764e6436ff91263dbfcbe39cd6f5b2c084329ebf93c4391b10b6fc007 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        // line 1
        $this->parent = $this->loadTemplate("@FOSUser/layout.html.twig", "@FOSUser/Group/edit.html.twig", 1);
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
        $__internal_3abbe86c32714a23c94fdcff0067bff02443a5edebb76a36d9eb205fd856e7d1 = $this->env->getExtension("native_profiler");
        $__internal_3abbe86c32714a23c94fdcff0067bff02443a5edebb76a36d9eb205fd856e7d1->enter($__internal_3abbe86c32714a23c94fdcff0067bff02443a5edebb76a36d9eb205fd856e7d1_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@FOSUser/Group/edit.html.twig"));

        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_3abbe86c32714a23c94fdcff0067bff02443a5edebb76a36d9eb205fd856e7d1->leave($__internal_3abbe86c32714a23c94fdcff0067bff02443a5edebb76a36d9eb205fd856e7d1_prof);

    }

    // line 3
    public function block_fos_user_content($context, array $blocks = array())
    {
        $__internal_be0d84528f7b10d9708e35be31945276245f4305145582b18e4c04c40cce146d = $this->env->getExtension("native_profiler");
        $__internal_be0d84528f7b10d9708e35be31945276245f4305145582b18e4c04c40cce146d->enter($__internal_be0d84528f7b10d9708e35be31945276245f4305145582b18e4c04c40cce146d_prof = new Twig_Profiler_Profile($this->getTemplateName(), "block", "fos_user_content"));

        // line 4
        $this->loadTemplate("@FOSUser/Group/edit_content.html.twig", "@FOSUser/Group/edit.html.twig", 4)->display($context);
        
        $__internal_be0d84528f7b10d9708e35be31945276245f4305145582b18e4c04c40cce146d->leave($__internal_be0d84528f7b10d9708e35be31945276245f4305145582b18e4c04c40cce146d_prof);

    }

    public function getTemplateName()
    {
        return "@FOSUser/Group/edit.html.twig";
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
/* {% include "@FOSUser/Group/edit_content.html.twig" %}*/
/* {% endblock fos_user_content %}*/
/* */
