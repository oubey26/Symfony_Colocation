<?php

/* @Framework/Form/repeated_row.html.php */
class __TwigTemplate_e8f42c37a00942d20d24230f040291186141f8e853cd7c091390cba4059963d4 extends Twig_Template
{
    public function __construct(Twig_Environment $env)
    {
        parent::__construct($env);

        $this->parent = false;

        $this->blocks = array(
        );
    }

    protected function doDisplay(array $context, array $blocks = array())
    {
        $__internal_2c75f6deb5bb6945eecdfbbcd6c1b5feb16cc639839bcb9abc3870503adbae45 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_2c75f6deb5bb6945eecdfbbcd6c1b5feb16cc639839bcb9abc3870503adbae45->enter($__internal_2c75f6deb5bb6945eecdfbbcd6c1b5feb16cc639839bcb9abc3870503adbae45_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        $__internal_8e6f35182b8693c1a717f999b5abf603c52a95fa8978793005c9d898a9503af4 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_8e6f35182b8693c1a717f999b5abf603c52a95fa8978793005c9d898a9503af4->enter($__internal_8e6f35182b8693c1a717f999b5abf603c52a95fa8978793005c9d898a9503af4_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/Form/repeated_row.html.php"));

        // line 1
        echo "<?php echo \$view['form']->block(\$form, 'form_rows') ?>
";
        
        $__internal_2c75f6deb5bb6945eecdfbbcd6c1b5feb16cc639839bcb9abc3870503adbae45->leave($__internal_2c75f6deb5bb6945eecdfbbcd6c1b5feb16cc639839bcb9abc3870503adbae45_prof);

        
        $__internal_8e6f35182b8693c1a717f999b5abf603c52a95fa8978793005c9d898a9503af4->leave($__internal_8e6f35182b8693c1a717f999b5abf603c52a95fa8978793005c9d898a9503af4_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/Form/repeated_row.html.php";
    }

    public function getDebugInfo()
    {
        return array (  25 => 1,);
    }

    /** @deprecated since 1.27 (to be removed in 2.0). Use getSourceContext() instead */
    public function getSource()
    {
        @trigger_error('The '.__METHOD__.' method is deprecated since version 1.27 and will be removed in 2.0. Use getSourceContext() instead.', E_USER_DEPRECATED);

        return $this->getSourceContext()->getCode();
    }

    public function getSourceContext()
    {
        return new Twig_Source("<?php echo \$view['form']->block(\$form, 'form_rows') ?>
", "@Framework/Form/repeated_row.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\Form\\repeated_row.html.php");
    }
}
