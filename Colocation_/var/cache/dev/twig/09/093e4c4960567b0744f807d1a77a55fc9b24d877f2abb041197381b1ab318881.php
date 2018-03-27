<?php

/* @Framework/FormTable/button_row.html.php */
class __TwigTemplate_eab4977fda3cb8dd22a614b9b6062090fdf2180c09379931ce0559b97308de19 extends Twig_Template
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
        $__internal_076224468fbd5bae0d1a696e51fc2839d4d7e7134122e229441ca12acb5542f6 = $this->env->getExtension("Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension");
        $__internal_076224468fbd5bae0d1a696e51fc2839d4d7e7134122e229441ca12acb5542f6->enter($__internal_076224468fbd5bae0d1a696e51fc2839d4d7e7134122e229441ca12acb5542f6_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        $__internal_ef2768a6a525fc3fbb1c64c0be4743a8bffad5ca8884e531540648face266225 = $this->env->getExtension("Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension");
        $__internal_ef2768a6a525fc3fbb1c64c0be4743a8bffad5ca8884e531540648face266225->enter($__internal_ef2768a6a525fc3fbb1c64c0be4743a8bffad5ca8884e531540648face266225_prof = new Twig_Profiler_Profile($this->getTemplateName(), "template", "@Framework/FormTable/button_row.html.php"));

        // line 1
        echo "<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
";
        
        $__internal_076224468fbd5bae0d1a696e51fc2839d4d7e7134122e229441ca12acb5542f6->leave($__internal_076224468fbd5bae0d1a696e51fc2839d4d7e7134122e229441ca12acb5542f6_prof);

        
        $__internal_ef2768a6a525fc3fbb1c64c0be4743a8bffad5ca8884e531540648face266225->leave($__internal_ef2768a6a525fc3fbb1c64c0be4743a8bffad5ca8884e531540648face266225_prof);

    }

    public function getTemplateName()
    {
        return "@Framework/FormTable/button_row.html.php";
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
        return new Twig_Source("<tr>
    <td></td>
    <td>
        <?php echo \$view['form']->widget(\$form) ?>
    </td>
</tr>
", "@Framework/FormTable/button_row.html.php", "C:\\wamp64\\www\\Colocation\\vendor\\symfony\\symfony\\src\\Symfony\\Bundle\\FrameworkBundle\\Resources\\views\\FormTable\\button_row.html.php");
    }
}
